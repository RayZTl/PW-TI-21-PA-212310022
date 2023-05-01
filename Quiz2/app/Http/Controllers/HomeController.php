<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $student = student::all();
       // dd($student);
       return view('home', compact('student'));
    }
}