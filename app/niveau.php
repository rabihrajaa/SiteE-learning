<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class niveau extends Model
{ 
	protected $primaryKey='idNiveau';
    //
     protected $fillable = [
        'idNiveau', 'libelleNv',
        'image_nv'
    ];





 public function niveau()
    {
        return $this->hasMany(cour::class,'idCours','idNiveau');

    }









}
