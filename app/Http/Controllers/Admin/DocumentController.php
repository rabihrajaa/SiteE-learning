<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\documents;
use App\typeressource;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;
use file;
use Response;

class DocumentController extends Controller
{
    public function addDocumentForm()
    {
        return view('admin.lesson.add', [
            'documents' => documents::all()
        ]);
    }

public function saveDocumentInfo(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'titleRc' => 'required',
        ]);
$id=typeressource::where('libelletype',$request->res)->first();
         $Documents['idtype'] = $id->idtype;
         $Documents['intituleRs'] = $request->titleRc;
         $Documents['descriptionRs'] = $request->description;

         if($request->res=="image"){
        $uploadedImagePath = imageUpload($request, 'image', 'uploads', 500, 265);
        $Documents['lienRs'] = $uploadedImagePath;
}

         if($request->res=="document" || $request->res=="audio"){

        $file = $request->file('image');
            $filename = time() . '.' . $request->file('image')->extension();
            $file->move('assets', $filename);

                 $Documents['lienRs'] =$filename; 
         }
 if($request->res=="video"){
                       $Documents['lienRs'] =$request->url; 



 }

                 documents::create($Documents);

         Toastr::success('Documents Saved Successfully', 'Save');
        return redirect()->route('admin.all-lesson');
    }
   
   public function allDocument()
    {
        return view('admin.lesson.lessons', [
            'documents' => documents::all()
        ]);
    }

   



    public function deleteDocument(Request $request)
    {
        documents::find($request->id)->delete();

        Toastr::success('Documents Deleted Successfully', 'Delete');
        return redirect()->route('admin.all-lesson');
    }

    public function editDocument($id)
    {
        return view('admin.lesson.edit', [
            'document' => documents::find($id)
        ]);
    }

    public function updateDocument(Request $request)
    {
        $Documents = documents::find($request->id);
        $Documents['intituleRs'] = $request->titleRc;
        $Documents['descriptionRs'] = $request->description;
         if($Documents->idtype==1){
           if (isset($request->image)) {
            if (file_exists($Documents->lienRs)) {
                unlink($Documents->lienRs);
            }

           $up = imageUpload($request, 'image', 'uploads', 500, 265);
        $Documents['lienRs'] = $up;
         }
     }

        if($Documents->idtype==2 || $Documents->idtype==4 ){
if (isset($request->image)) {
            if (file_exists($Documents->lienRs)) {
                unlink($Documents->lienRs);
            }
        $file = $request->file('image');
            $filename = time() . '.' . $request->file('image')->extension();
            $file->move('assets', $filename);

                 $Documents['lienRs'] =$filename;
}}

        if($Documents->idtype==3){

$Documents['lienRs'] =$request->url;
}


                      $Documents->save();

        Toastr::info('RDocumentsessource Updated Successfully', 'Update');
        return redirect()->route('admin.all-lesson');
    }

    

 public function downloadpdf(Request $request,$file)
    {


        return $file;    

    }




}
