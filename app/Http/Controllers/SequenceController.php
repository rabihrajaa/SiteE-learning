<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cour;
use App\sequence;
use App\documents;
use App\composer;
use App\Comment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;


class SequenceController extends Controller
{

	 public function allSectionC($id)
    {
        return view('web.section', [
            'sections' => sequence::WHERE('idCours',$id)->get(),
                        'cour' => cour::WHERE('idCours',$id)->first(),
                        'comments' => Comment::WHERE('idCours',$id)->orderBy('created_at','DESC')->get()

        ]);
    }

 public function allbase($id)
    {
        return view('web.base', [
            'documents' => documents::WHERE('idSequence',$id)->get()
        ]);
    }







    }
