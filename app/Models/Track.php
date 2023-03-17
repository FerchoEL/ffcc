<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion inversa uno a muchos
    public function yard(){
        return $this->belongsTo('App\Models\Yard');
    }

    //Relacion inversa uno a uno
    public function carInspection(){
        return $this->belongsTo('App\Models\CarInspection');
    }
}
