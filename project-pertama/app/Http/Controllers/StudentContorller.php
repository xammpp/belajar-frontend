<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentContorller extends Controller
{
    public function students()
    {
        $student = Student::all();
        return view('students', ['studentList' => $student]);
    }
}
