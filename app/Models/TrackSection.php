<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackSection extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeTrackSection($query,$selectedTrack)
    {
        if($selectedTrack){
            return $query->where('track_id', $selectedTrack);
        }

    }

    public function track(){
        return $this->belongsTo('App\Models\Track');
    }

    public function inspections(){
        return $this->hasMany('App\Models\Inspection','tracksection_id');
    }
}
