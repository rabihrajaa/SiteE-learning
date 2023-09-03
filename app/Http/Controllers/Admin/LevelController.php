<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\niveau;
use app\cour;
use DB;
use Brian2694\Toastr\Facades\Toastr;

class  LevelController extends Controller
{
    public function alllevel()
    {
        return view('admin.level.levels', [
            'niveaux' => niveau::latest()->get()
        ]);
    }

    public function addlevelForm()
    {
        return view('admin.level.add');
    }

       public function savelevelInfo(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $niveaux['libelleNv'] = $request->title;
        $uploadedImagePath = imageUpload($request, 'image', 'uploads', 270, 90);
        $niveaux['image_nv'] = $uploadedImagePath;
        niveau::create($niveaux);

        Toastr::success('level Saved Successfully', 'Save');
        return redirect()->route('admin.all-level');
    }

    public function editlevel($id)
    {
        return view('admin.level.edit', [
            'niveau' => niveau::WHERE('idNiveau',$id)->first()
        ]);
    }

    public function updatelevel(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:2048'
        ]);

        $niveau = niveau::WHERE('idNiveau',$request->id)->first();

        $niveau->libelleNv = $request->title;
        if (isset($request->image)) {
            if (file_exists($niveau->image_nv)) {
                unlink($niveau->image_nv);
            }
            $uploadedImagePath = imageUpload($request, 'image', 'uploads', 270, 90);
            $niveau->image = $uploadedImagePath;
        }
        $niveau->save();

        Toastr::info('level Updated Successfully', 'Update');
        return redirect()->route('admin.all-level');
    }

    public function deletelevel(Request $request)
    {
        cour::WHERE('idCategorie',$request->id)->delete();

        $niveau = niveau::WHERE('idNiveau',$request->id);
        // if (file_exists($niveau->image)) {
        //     unlink($niveau->image);
        // }
        $niveau->delete();

        Toastr::success('level Deleted Successfully', 'Delete');
        return redirect()->route('admin.all-level');
    }

}

