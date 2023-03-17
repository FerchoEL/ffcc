<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yard extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a uno
    public function email(){
        return $this->hasOne('App\Models\Email');
    }

    //Relacion uno a munchos
    public function tracks(){
        return $this->hasMany('App\Models\Track');
    }

     //Relacion inversa uno a muchos
    public function location(){
        return $this->belongsTo('App\Models\Location');
    }
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
    
    //RElacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}