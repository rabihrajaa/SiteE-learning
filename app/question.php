<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{

protected $primaryKey='idquestion';



    protected $fillable = ['question','idCours','id'];



}
