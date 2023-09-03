<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cour;
use App\question;
use App\typeq;
use App\reponse;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;


class exerciceController extends Controller
{

	 public function allexercice($id)
    {
        return view('web.execice', [
            'exercices' => question::WHERE('idCours',$id)->orderBy('idquestion')->get(),
            'reponses' => reponse::all()

        ]);
    }
public function verify(Request $request)
{
     return view('web.reponse', [
            'exercices' => question::WHERE('idCours',$request->id)->orderBy('idquestion')->get(),
            'reponses' => reponse::all()

        ]);



}








    }
