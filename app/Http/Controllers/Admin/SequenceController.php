 <?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cour;
use App\sequence;
use App\documents;
use App\composer;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class SequenceController extends Controller
{
    public function addSectionForm()
    {
        return view('admin.section.add', [
            'cours' => cour::all()
        ]);
    }




    public function saveSectionInfo(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'title' => 'required',
            'id_cr' => 'required',

        ]);

                 $sequences['intituleSq'] = $request->title;
                 $sequences['descriptionSq'] = $request->description;
                 $sequences['idCours'] = $request->id_cr;

                 sequence::create($sequences);
                
        Toastr::success('Section Saved Successfully', 'Save');
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
            'section' => sequence::find($id),
            'cours' => cour::all()

        ]);
    }

    public function updateSection(Request $request)
    {
$request->validate([
            'description' => 'required',
            'title' => 'required',
            'id_cr' => 'required',

        ]);
        
        $sequences = sequence::find($request->id);
          $sequences['intituleSq'] = $request->title;
          $sequences['descriptionSq'] = $request->description;
         $sequences['idCours'] = $request->id_cr;

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
