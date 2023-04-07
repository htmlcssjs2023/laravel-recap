<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
   public function user_list(){

    $users = user::all();

    return view('hello', compact('users'));

    // return "Web learn bd";
   }
}
