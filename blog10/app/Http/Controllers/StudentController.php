<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function add(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email',
            'phone' => 'required|string|max:15',
        ]);

        // Create a new student record
        $student = new Student();
        $student->name = $validated['name'];
        $student->email = $validated['email'];
        $student->phone = $validated['phone'];
        $student->save();

        // Return success message
        return redirect('list');
    }

    //Student List
    function list()
    {
        // $studentData = Student::all();
        $studentData = Student::paginate(5);

        return view('list-student', ['students' => $studentData]);
    }

    function delete($id)
    {
        $isDeleted = Student::destroy($id);
        if ($isDeleted) {
            // echo "Deleted";
            return redirect('list');
        } else {
            echo "Not Deleted";
        }
    }
    function edit($id)
    {
        $stuData = Student::find($id);
        if ($stuData) {
            return view('edit', ['data' => $stuData]);
        } else {
            echo "Not fetch";
        }
    }

    function editStudent(Request $req, $id)
    {
        $validated = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:students,email',
            'phone' => 'required|string|max:15',
        ]);
        $stuData = Student::find($id);
        $stuData->name = $validated['name'];
        $stuData->email = $validated['email'];
        $stuData->phone = $validated['phone'];
        if ($stuData->save()) {
            return redirect('list');
        } else {
            return "Update operation failed";
        }
    }

    function search(Request $req){
        $stuData = Student::where('name','like',"%$req->search%")->get();
        return view('list-student', ['students' => $stuData,'search'=>$req->search]);
        // return $req->search;
    }

    function deleteMultiple(Request $req){
        $result = Student::destroy($req->ids);
        if($result){
            return redirect('list');
        }else{
            return "Student data not found.";
        }
    }
}
