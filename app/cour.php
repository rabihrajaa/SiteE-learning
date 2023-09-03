<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cour extends Model
{
		protected $primaryKey='idCours';
    protected $fillable = [
        'idCategorie', 'idNiveau', 'titreCr','dateCr', 
         'descriptionCr','imageCr'
    ];

    

    public function category()
    {
        return $this->belongsTo(Category::class,'idCategorie','id');
    }

    public function niveau()
    {
        return $this->belongsTo(niveau::class,'idNiveau','idNiveau');
    }

  

     public function sequence()
    {
        return $this->hasMany(sequence::class,'idCours','idCours');
    }

}
