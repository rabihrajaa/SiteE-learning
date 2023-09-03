<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reponse extends Model
{

protected $primaryKey='id';



    protected $fillable = ['option1', 'option2','option3','option4','reponse1','reponse2','reponse3','idquestion'];


}
