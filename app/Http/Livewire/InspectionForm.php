<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Yard;
use App\Models\Track;
use App\Models\TrackSection;
use App\Models\User;

class InspectionForm extends Component
{
    public $selectedYard , $selectedTrack;

    public function render()
    {
        $user=User::find(auth()->id());
        $yards=$user->yards;
        foreach ($yards as $yard)
        {
            $yards_id[]=$yard->id;
        }

        if (isset($yards)) {
            $yards=Yard::pluck('name','id')->toArray();
            $yards_id=$yards;

        } else {
            $yards=Yard::whereIn('id',$yards_id)->pluck('name','id')->toArray();
        }

        if (!$this->selectedYard) {
            $tracks=Track::whereIn('yard_id',$yards_id)->pluck('name','id')->toArray();
        } else {
            $tracks=Track::track($this->selectedYard)->pluck('name','id')->toArray();

        }
        $tracks_id=array_keys($tracks);
        if (!$this->selectedTrack) {
            $tracksections=TrackSection::whereIn('track_id',$tracks_id)->pluck('name','id')->toArray();
        } else {
            $tracksections=TrackSection::tracksection($this->selectedTrack)->pluck('name','id')->toArray();
        }


        return view('livewire.inspection-form',compact('yards','tracks','tracksections'));
    }
}