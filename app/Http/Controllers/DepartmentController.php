<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function department(){

        //   for($i=0; $i<10; $i++){
        //     $datas = [
        //         'deptName' => 'Computer Science '. $i,

        //     ];

        //     Department::create($datas);
        // }

       $departments =  Department::all();
        return view('department', compact('departments'));
    }
}
