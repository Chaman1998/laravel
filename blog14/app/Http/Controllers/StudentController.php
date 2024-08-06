<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    //
    function list()
    {
        // return "List function called";

        return Student::all();
    }
    function addStudent(Request $request)
    {
        // return "List function called";

        $rules = array(
            'name' => 'required | min:2 | max:10',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|numeric|min:10',
        );
        $validation = Validator::make($request->all(), $rules);

        if ($validation->fails()) {
            return $validation->errors();
        } else {
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;

            if ($student->save()) {
                // return "Student added";
                return ["result" => "student added"];
            } else {
                return ["result" => "Failed"];
            }
        }
    }

    function updateStudent(Request $request)
    {
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        if ($student->save()) {
            // return "Student added";
            return ["result" => "student Updated"];
        } else {
            return ["result" => "Updated Failed"];
        }
    }

    function deleteStudent($id)
    {
        $student = Student::destroy($id);
        if ($student) {
            return ['result' => 'Student record deleted successfully.'];
        } else {
            return ['result' => 'Failed to delete.'];
        }
    }

    function searchStudent($name)
    {
        $student = Student::where('name', 'like', "%$name%")->get();
        if ($student) {
            return ['result' => $student];
        } else {
            return ['result' => 'Failed to delete.'];
        }
    }
}
