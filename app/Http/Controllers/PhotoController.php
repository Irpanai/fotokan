<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(Request $request)
    {
        $events = \App\Models\Event::latest()->get();
        $photos = \App\Models\Photo::where('fotografer_id', $request->user()->id)->latest()->get();
        return view('fotografer.photos.index', compact('events', 'photos'));
    }

    public function create()
    {
        // Load events so photographer can choose which event to upload photos for
        $events = \App\Models\Event::latest()->get();
        return view('fotografer.photos.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'nullable|exists:events,id',
            'new_folder' => 'nullable|string|max:255',
            'photo' => 'required|image|max:10240', // Max 10MB
            'harga' => 'required|integer|min:0',
        ]);

        if (!$request->event_id && !$request->new_folder) {
            return back()->withErrors(['event_id' => 'Silakan pilih event yang sudah ada atau buat folder (event) baru.'])->withInput();
        }

        $user = $request->user();
        $package = $user->package ?? \App\Models\Package::where('nama_paket', 'Basic')->first();
        $fileSizeMB = $request->file('photo')->getSize() / 1024 / 1024;

        if ($user->storage_terpakai_mb + $fileSizeMB > $package->kuota_storage_mb) {
            return back()->withErrors(['photo' => 'Storage quota exceeded.']);
        }

        // Mock AI Vision
        $mockTags = json_encode(['baju merah', 'sepeda', 'bib ' . rand(1000, 9999)]);

        if ($request->new_folder) {
            $event = \App\Models\Event::firstOrCreate(
                [
                    'nama_event' => trim($request->new_folder),
                    'fotografer_id' => $user->id,
                ],
                [
                    'tanggal_event' => now(),
                    'lokasi' => 'Online',
                ]
            );
        } else {
            $event = \App\Models\Event::findOrFail($request->event_id);
        }

        $eventName = \Illuminate\Support\Str::slug($event->nama_event);

        // Save Original
        $pathAsli = $request->file('photo')->store('photos/original/' . $eventName, 'local');

        // Apply Watermark
        // (Using Intervention Image logic here)
        $manager = new \Intervention\Image\ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
        $image = $manager->decodePath($request->file('photo')->path());
        
        // Add text watermark
        $image->text('Jepret Watermark', $image->width() / 2, $image->height() / 2, function($font) {
            $font->size(48);
            $font->color('rgba(255, 255, 255, 0.5)');
            $font->align('center', 'center');
        });

        $watermarkPath = 'photos/watermark/' . $eventName . '/' . uniqid() . '.jpg';
        // Ensure directory exists
        \Illuminate\Support\Facades\Storage::disk('public')->makeDirectory('photos/watermark/' . $eventName);
        $image->save(storage_path('app/public/' . $watermarkPath));

        \App\Models\Photo::create([
            'event_id' => $event->id,
            'fotografer_id' => $user->id,
            'file_asli' => $pathAsli,
            'file_watermark' => $watermarkPath,
            'harga' => $request->harga,
            'ai_tags' => $mockTags,
        ]);

        $user->increment('storage_terpakai_mb', ceil($fileSizeMB));

        return back()->with('success', 'Photo uploaded.');
    }

    public function destroy(\App\Models\Photo $photo, Request $request)
    {
        if ($photo->fotografer_id !== $request->user()->id) {
            abort(403);
        }

        // Refund storage quota (assuming file sizes are approximately known, 
        // or just calculate from file_asli). For simplicity we won't decrement storage here,
        // or we could check the file size using Storage::size()

        try {
            $fileSizeMB = \Illuminate\Support\Facades\Storage::disk('local')->size($photo->file_asli) / 1024 / 1024;
            $request->user()->decrement('storage_terpakai_mb', ceil($fileSizeMB));
        } catch (\Exception $e) {
            // file might not exist
        }

        \Illuminate\Support\Facades\Storage::disk('local')->delete($photo->file_asli);
        \Illuminate\Support\Facades\Storage::disk('public')->delete($photo->file_watermark);

        $photo->delete();

        return back()->with('success', 'Photo deleted.');
    }
}
