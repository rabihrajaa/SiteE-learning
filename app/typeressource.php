<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeressource extends Model
{
protected $primaryKey='idtype';


    protected $fillable = ['libelletype'];

    public function documents()
    {
        return $this->hasMany(documents::class,'idtype','idtype');
    }

  
}
