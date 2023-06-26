<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentCatalog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeComponent($query,$selectedComponent)
    {
        if($selectedComponent){
            return $query->where('type_component', $selectedComponent);

        }

    }
}
