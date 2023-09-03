<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cour;
use Brian2694\Toastr\Facades\Toastr;

class CourController extends Controller
{
	  // public function index($id, $title)
    //
  public function index($idC,$idN)
    {
        return view('web.cours', [
            'cours' => cour::where('idcategorie', $idC)
                                ->where('idNiveau', $idN)
                                ->paginate(8),
            // 'cours_name' => ucfirst( str_replace('-', ' ', $title))
        ]);
    }
}