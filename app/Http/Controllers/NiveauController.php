<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\niveau;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;

class NiveauController extends Controller
{
    //
         public function allniveau($id)
    {
        return view('web.levels', [
            'niveaux' => niveau::latest()->get(),
             'categories' => Category::where('id',$id)->first()
        ]);
    }
}
