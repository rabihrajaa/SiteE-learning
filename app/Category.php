<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'image'];

    public function categories()
    {
        return $this->hasMany(cour::class,'idCours','id');
    }
}
