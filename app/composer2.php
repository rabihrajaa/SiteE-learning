<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class composer2 extends Model
{
protected $primaryKey=['idRessourceC','idSequence'];


 public function sequence()
    {
        return $this->belongsTo(sequence::class,'idSequence','idSequence');
    }

public function Video()
    {
        return $this->belongsTo(Video::class,'idRessourceC','idRessourceC');
    }


     public function Audios()
    {
        return $this->belongsTo(Audios::class,'idRessourceC','idRessourceC');
    }
    
     public function Image()
    {
        return $this->belongsTo(Image::class,'idRessourceC','idRessourceC');
    }

     public function documents()
    {
        return $this->belongsTo(documents::class,'idRessourceC','idRessourceC');
    }


}
