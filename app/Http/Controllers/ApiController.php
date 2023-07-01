<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller {

    public function create( Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student -> save();
        return response()->json([

           "mensage" => "student record created"
        ]);
    }

    public function get() {
        return Student::all();

    }

    public function update( Request $request) {
        $student  = Student::find(1);
        $student -> name = 'Rodolfo';

        $student -> save();
    }

    public function destroy ($id) {
        $student  = Student::findOrFail($id);
        $student->delete();
        return $student;
    }
}
