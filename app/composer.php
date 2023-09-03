<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class composer extends Model
{

protected $primaryKey=['idSequence','idCours'];
public $incrementing=false;
             protected $fillable = [
        'idSequence', 'idCours'
      
    ];

 public function Sequence()
    {
        return $this->belongsTo(sequence::class,'idSequence','idSequence');
    }

     public function cour()
    {
        return $this->belongsTo(cour::class,'idCours','idCours');
    }
    


}
