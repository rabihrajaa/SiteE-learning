<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
protected $primaryKey='idRessourceC';


    protected $fillable = ['intituleRs', 'descriptionRs','lienRs','size'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

       public function composer2()
    {
        return $this->hasMany(composer2::class);
    }
}
