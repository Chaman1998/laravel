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
    function list(){
        $studentData = Student::all();
        return view('list-student',['students'=>$studentData]);;
    }

    function delete($id){
        $isDeleted = Student::destroy($id);
        if($isDeleted){
            // echo "Deleted";
            return redirect('list');
        }else{
            echo "Not Deleted";
        }
    }
}
