<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
    public function yard(){
        return $this->belongsTo('App\Models\Yard');
    }
    public function track(){
        return $this->belongsTo('App\Models\Track');
    }
    public function location(){
        return $this->belongsTo('App\Models\Location');
    }
    /*public function tracksection(){
        return $this->belongsTo('App\Models\TrackSection');
    }*/
}