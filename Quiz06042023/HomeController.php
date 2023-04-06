<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
//  public function index(){
//     return view('modules.home.home')->with("title","Hello world");
//  }

public function index () {
    $data = array();
    $data['title'] = "Blade Directive";
    $data['npm'] = 212310006;
    $students[] = array("npm"=>212310006, "name"=>"Ray", "alamat"=>"Cimahpar", "gender"=>"Male",);
    $students[] = array("npm"=>212310006, "name"=>"Lilas", "alamat"=>"Cijeruk", "gender"=>"Female",);
    $students[] = array("npm"=>212310006, "name"=>"rei yasuda", "alamat"=>"Cimangga", "gender"=>"Female",);
    $students[] = array("npm"=>212310006, "name"=>"Aimer", "alamat"=>"Cistroberi", "gender"=>"Female",);
    $students[] = array("npm"=>212310006, "name"=>"Mirai", "alamat"=>"Cidurian", "gender"=>"Female",);
    $students[] = array("npm"=>212310006, "name"=>"Shendelzere", "alamat"=>"Cianggur", "gender"=>"Male",);
    $data['students'] = $students;
    return view('modules.home.home')->with("data",$data);
}


}