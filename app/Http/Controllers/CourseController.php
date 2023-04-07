<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courseList(){
        //   for($i=0; $i<10; $i++){
        //     $datas = [
        //         'courseCode' => '101'. $i,
        //         'courseTitle' => 'Chemistry _'. $i,

        //     ];
        //     Course::create($datas);
        // }
        
        $courses =  Course::all();

        return view('course', compact('courses'));
    }

}
