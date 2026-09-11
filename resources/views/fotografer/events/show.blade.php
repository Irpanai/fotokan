<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('fotografer.events.index') }}" class="text-gray-400 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-100 leading-tight">
                {{ $event->nama_event }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Upload Section -->
            <div class="bg-gray-800 shadow-xl sm:rounded-2xl border border-gray-700 p-6">
                <h3 class="text-lg font-bold text-white mb-4">Upload New Photos</h3>
                <form action="{{ route('fotografer.photos.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col md:flex-row gap-4 items-end">
                    @csrf
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    
                    <div class="flex-1 w-full">
                        <label class="block text-sm font-medium text-gray-300 mb-1">Select Photo</label>
                        <input type="file" name="photo" accept="image/*" class="block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-700 file:text-white hover:file:bg-gray-600 bg-gray-900 border border-gray-600 rounded-lg cursor-pointer focus:outline-none" required>
                    </div>

                    <div class="w-full md:w-48">
                        <label class="block text-sm font-medium text-gray-300 mb-1">Price (Rp)</label>
                        <input type="number" name="harga" min="0" value="15000" class="block w-full bg-gray-900 border border-gray-600 rounded-lg text-white px-4 py-2 focus:ring-accent focus:border-accent" required>
                    </div>

                    <button type="submit" class="w-full md:w-auto bg-accent hover:bg-accent-hover text-white px-6 py-2 rounded-lg font-semibold transition h-[42px]">
                        Upload
                    </button>
                </form>
                @error('photo')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <!-- Photos Grid -->
            <div class="bg-gray-800 shadow-xl sm:rounded-2xl border border-gray-700 p-6">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-white">Uploaded Photos <span class="text-sm font-normal text-gray-400">({{ $photos->total() }})</span></h3>
                </div>

                @if($photos->isEmpty())
                    <div class="p-12 text-center border-2 border-dashed border-gray-700 rounded-xl">
                        <svg class="w-12 h-12 text-gray-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <p class="text-gray-400">No photos uploaded to this event yet.</p>
                    </div>
                @else
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach($photos as $photo)
                            <div class="relative group bg-gray-900 rounded-xl overflow-hidden border border-gray-700 aspect-square">
                                <img src="{{ asset('storage/' . $photo->file_watermark) }}" alt="Photo" class="w-full h-full object-cover transition duration-300 group-hover:scale-105">
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-3">
                                    <p class="text-white font-bold text-sm">Rp {{ number_format($photo->harga, 0, ',', '.') }}</p>
                                    
                                    <form action="{{ route('fotografer.photos.destroy', $photo) }}" method="POST" class="absolute top-2 right-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500/80 hover:bg-red-600 text-white p-1.5 rounded-lg transition backdrop-blur-sm" onclick="return confirm('Delete this photo?')">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                                
                                @if($photo->ai_tags)
                                    @php $tags = json_decode($photo->ai_tags); @endphp
                                    <div class="absolute top-2 left-2 flex flex-wrap gap-1 max-w-[80%]">
                                        @foreach(array_slice($tags, 0, 2) as $tag)
                                            <span class="px-2 py-0.5 text-[10px] font-bold bg-gray-900/80 backdrop-blur-sm text-accent rounded-full border border-accent/30">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-6">
                        {{ $photos->links() }}
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
