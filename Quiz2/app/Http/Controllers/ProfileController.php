<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function profile(){
        $biodata = biodata::all();
       // dd($student);
       return view('profile', compact('biodata'));
 }
}