<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
protected $primaryKey='idRessourceC';


    protected $fillable = ['intituleRs', 'descriptionRs','lienRs','nbrPage','idSequence','idtype'];

    

    public function sequence()
    {
        return $this->belongsTo(sequence::class,'idSequence','idSequence');
    }

public function typeressource()
    {
        return $this->belongsTo(typeressource::class,'idtype','idtype');
    }


    
    }
