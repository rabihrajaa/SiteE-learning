<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cour;
use App\niveau;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class CourController extends Controller
{
    public function addCourForm()
    {
        return view('admin.cour.add', [
            'categories' => Category::all(),
            'niveaux'=>niveau::all()

        ]);
    }

    public function saveCourInfo(Request $request)
    {
        $request->validate([
            'title' => 'required',
             'category_id' => 'required',
            'level_id' => 'required',
           
             'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);


         $cours['titreCr'] = $request->title;
          $cours['idCategorie'] = $request->category_id;
           $cours['idNiveau'] = $request->level_id;
            
  $cours['descriptionCr'] = $request->description;

        $uploadedImagePath = imageUpload($request, 'image', 'uploads', 500, 265);
        $cours['imageCr'] = $uploadedImagePath;
        cour::create($cours);

        Toastr::success('Course Saved Successfully', 'Save');
        return redirect()->route('admin.all-cour');
    }

    public function allCour()
    {
        return view('admin.cour.cours', [
            'cours' => Cour::latest()->get()
        ]);
    }

    public function deleteCour(Request $request)
    {
        $cour = Cour::find($request->id);
        if (file_exists($cour->imageCr)) {
            unlink($cour->imageCr);
        }
        $cour->delete();

        Toastr::success('Course Deleted Successfully', 'Delete');
        return redirect()->route('admin.all-cour');
    }

    public function editCour($id)
    {
        return view('admin.cour.edit', [
            'cours' => Cour::find($id),
            'categories' => Category::all(),
             'niveaux' => niveau::all(),
        ]);
    }

    public function updateCour(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'level_id' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:2048'
        ]);

        $cour = cour::find($request->id);

         $cour['titreCr'] = $request->title;
          $cour['idCategorie'] = $request->category_id;
           $cour['idNiveau'] = $request->level_id;
            
  $cour['descriptionCr'] = $request->description;
   
        if (isset($request->image)) {
            if (file_exists($cour->imageCr)) {
                unlink($cour->imageCr);
            }
            $uploadedImagePath = imageUpload($request, 'image', 'uploads', 500, 265);
            $cour['imageCr'] = $uploadedImagePath;
        }
        $cour->save();

        Toastr::info('Course Updated Successfully', 'Update');
        return redirect()->route('admin.all-cour');
    }

   

}
