<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Event;

class MarketplaceController extends Controller
{
    public function show(Photo $photo)
    {
        $photo->load(['fotografer', 'event']);
        
        $relatedPhotos = Photo::where('event_id', $photo->event_id)
            ->where('fotografer_id', $photo->fotografer_id)
            ->where('id', '!=', $photo->id)
            ->limit(4)
            ->get();

        return view('marketplace.show', compact('photo', 'relatedPhotos'));
    }

    public function checkout(Photo $photo)
    {
        $photo->load(['fotografer', 'event']);
        return view('marketplace.checkout', compact('photo'));
    }
}
