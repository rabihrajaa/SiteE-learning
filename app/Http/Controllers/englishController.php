<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;

class englishController extends Controller
{
    //
        public function allCategory()
    {
        return view('web.English_student', [
            'categories' => Category::latest()->get()
        ]);
    }
}
