<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cour;
use App\question;
use App\typeq;
use App\reponse;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class questionController extends Controller
{
    public function addExerciceForm()
    {
        return view('admin.exercice.add', [
            'cours' => cour::all(),
            'types' => typeq::all()

        ]);
    }




    public function saveExerciceInfo(Request $request)
    {
        

                 $questions['idCours'] = $request->idcr;
                 $questions['id'] = $request->type;
                 $questions['question'] = $request->question;
                 question::create($questions);
                 $id=question::orderBy('idquestion','desc')->value('idquestion');
               $reponses['idquestion'] = $id;

                 $reponses['reponse1'] = $request->res1;
                 $reponses['reponse2'] = $request->res2;
                 $reponses['reponse3'] = $request->res3;
                 $reponses['option1'] = $request->op1;
                 $reponses['option2'] = $request->op2;
                 $reponses['option3'] = $request->op3;
                 $reponses['option4'] = $request->op4;


                 
                 reponse::create($reponses);

        Toastr::success('question Saved Successfully', 'Save');
        return redirect()->route('admin.all-section');

    }



    public function allSection()
    {
        return view('admin.section.sections', [
            'sections' => sequence::all()
        ]);
    }



   


     public function allSections()
    {
        return view('admin.section.affsect', [
            'sections' => sequence::all(),
            'ressources' => documents::all()

        ]);
    }





    public function deleteSection(Request $request)
    {

     documents::WHERE('idSequence',$request->id)->delete();
     
        sequence::find($request->id)->delete();
         
        Toastr::success('Section Deleted Successfully', 'Delete');
        return redirect()->route('admin.all-section');
    }

    public function editSection($id)
    {
        return view('admin.section.edit', [
            'section' => sequence::find($id)

        ]);
    }

    public function updateSection(Request $request)
    {
        $sequences = sequence::find($request->id);
          $sequences['intituleSq'] = $request->title;
          $sequences['descriptionSq'] = $request->description;

                      $sequences->save();

        Toastr::info('Section Updated Successfully', 'Update');
        return redirect()->route('admin.all-section');
    }

public function affectation(Request $request)
    {
        $Documents = documents::find($request->id_res);
        $Documents['idSequence'] = $request->id_section;
                      $Documents->save();
  Toastr::info('RDocumentsessource affecter Successfully', 'add');

          return redirect()->route('admin.all-sections');

             
        
    }



    public function sectionsByCourseId(Request $request)
    {
        if ($request->ajax()) {
            $sections = Section::where('course_id', $request->course_id)->get();
            $output = "<option value=''>--Select One--</option>";
            foreach ($sections as $section) {
                $output .= '<option value="'.$section->id.'">'.$section->title.'</option>';
            }
            echo json_encode($output);
        }
    }

}
