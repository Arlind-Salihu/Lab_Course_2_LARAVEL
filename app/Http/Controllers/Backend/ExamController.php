<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function ExamView()
    {
        // $allData = Exam::all();
        $data['allData'] = Exam::all();
        return view('backend.exam.view_exam', $data);
    }

    public function ExamViewAdm()
    {
        // $allData = Exam::all();
        $data['allData'] = Exam::all();
        return view('backend.exam.admin.view_exam', $data);
    }

    public function ExamAdd()
    {
        return view('backend.exam.admin.add_exam');
    }
    public function ExamStore(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|unique:exams',
            'name' => 'required',
        ]);

        $data = new Exam();
        $data -> code = $request -> code;
        $data -> name = $request -> name;
        $data -> ects = $request -> ects;
        $data -> category = $request -> category;
        $data -> grade	 = $request -> grade	;
        $data -> professor = $request -> professor;
        $data->save();

        $notification = array(
            'message' => 'Exam added successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('backend.exam.admin.view')->with($notification);
    }


    public function ExamEdit($id){
        $editData = Exam::find($id);
        return view('backend.exam.admin.edit_exam', compact('editData'));
    }


    public function ExamUpdate(Request $request, $id){
        $data = Exam::find($id);
        
        $data = new Exam();
        $data -> code = $request -> code;
        $data -> name = $request -> name;
        $data -> ects = $request -> ects;
        $data -> category = $request -> category;
        $data -> grade	 = $request -> grade	;
        $data -> professor = $request -> professor;
        $data->save();

        $notification = array(
            'message' => 'Exam updated successfully!',
            'alert-type' => 'info'
        );

        return redirect()->route('exam.admin.view')->with($notification);
    }

    public function ExamDelete($id){
        $exam = Exam::find($id);
        $exam->delete();

        $notification = array(
            'message' => 'Exam deleted successfully!',
            'alert-type' => 'info'
        );

        return redirect()->route('exam.admin.view')->with($notification);
    }
}