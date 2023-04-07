<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentInfo(){

        // for($i=0; $i<15; $i++){
        //     $datas = [
        //         'name' => 'Halim '. $i,
        //         'phone' => '9939'.$i
        //     ];

        //     Student::create($datas);
        // }

        $students = Student::all();
        return view('student', compact('students'));
    }
}
