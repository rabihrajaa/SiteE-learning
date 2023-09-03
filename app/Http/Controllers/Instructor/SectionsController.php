<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Section;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class SectionsController extends Controller
{
    public function addSectionForm()
    {
        return view('instructor.section.add', [
            'courses' => Course::where('is_approved', 1)
                ->where('instructor_id', Auth::id())
                ->get()
        ]);
    }

    public function saveSectionInfo(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'title' => 'required'
        ]);

        Section::create($request->all());

        Toastr::success('Section Saved Successfully', 'Save');
        return redirect()->route('instructor.all-section');
    }

    public function allSection()
    {
        $courses = Course::where('instructor_id', Auth::id())
                            ->where('instructor_id', Auth::id())->get();
        $sections = [];
        foreach ($courses as $course) {
            foreach ($course->sections as $section) {
                $sections[] = $section;
            }
        }
        return view('instructor.section.sections', [
            'sections' => $sections
        ]);
    }

    public function editSection($id)
    {
        return view('instructor.section.edit', [
            'section' => Section::find($id),
            'courses' => Course::where('is_approved', 1)
                                ->where('instructor_id', Auth::id())
                                ->get()
        ]);
    }

    public function updateSection(Request $request)
    {
        $section = Section::find($request->id);
        $section->update($request->all());

        Toastr::info('Section Updated Successfully', 'Update');
        return redirect()->route('instructor.all-section');
    }

    public function deleteSection(Request $request)
    {
        Section::find($request->id)->delete();

        Toastr::success('Section Deleted Successfully', 'Delete');
        return redirect()->route('instructor.all-section');
    }

    public function sectionsByCourseId(Request $request)
    {
        if ($request->ajax()) {
            $sections = Section::where('course_id', $request->course_id)->get();
            $output = "<option value=''>--Select One--</option>";
            foreach ($sections as $section) {
                $output .= '<option value="' . $section->id . '">' . $section->title . '</option>';
            }
            echo json_encode($output);
        }
    }

}
