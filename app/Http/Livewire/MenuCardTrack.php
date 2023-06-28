<?php

namespace App\Http\Livewire;

use App\Models\TrackSection;
use Livewire\Component;
use App\Models\Track;
use App\Models\User;


class MenuCardTrack extends Component
{
    public $selectedCard;
    public function render()
    {
        $user = User::find(auth()->id());
        $yards = $user->yards;

        //buscar las vias con respecto a los patios que tiene el usuario
        foreach ($yards as $yard) {
            $tracks[] = (Track::where('yard_id', $yard->id)
                ->get());
        }
        foreach ($tracks as $track) {
            foreach ($track as $array) {
                $merge_tracks[] = $array;
            }
        }
        //buscar los tramos de vía con respecto a las vías
        foreach ($merge_tracks as $merge_track) {
            $tracksections[] = (TrackSection::where('track_id', $merge_track->id)
                ->get());
        }
        foreach ($tracksections as $tracksection) {
            foreach ($tracksection as $array) {
                $merge_tracksections[] = $array;
            }
        }
//        dump($merge_tracksections);
        return view('livewire.menu-card-track', compact('merge_tracks','merge_tracksections', 'tracks'));
    }

}
