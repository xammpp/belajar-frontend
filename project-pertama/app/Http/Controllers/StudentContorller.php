<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentContorller extends Controller
{
    public function students()
    {
        $name = 'Daffa';
        return view('/students', ['name' => $name]);
    }
}
