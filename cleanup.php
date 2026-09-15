<?php
$duplicates = \App\Models\Event::where('nama_event', 'Banjarbaru 2026')->get();
if ($duplicates->count() > 1) {
    $first = $duplicates->shift();
    foreach ($duplicates as $dup) {
        \App\Models\Photo::where('event_id', $dup->id)->update(['event_id' => $first->id]);
        $dup->delete();
    }
}
echo 'Merged successfully.';
