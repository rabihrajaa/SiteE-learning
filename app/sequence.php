<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sequence extends Model
{

protected $primaryKey='idSequence';



    protected $fillable = ['intituleSq', 'descriptionSq','orderSq','idCours'];

public function cour()
    {
        return $this->belongsTo(cour::class,'idCours','idCours');
    }



    public function document()
    {
        return $this->hasMany(documents::class,'idSequence','idSequence');
    }

}
