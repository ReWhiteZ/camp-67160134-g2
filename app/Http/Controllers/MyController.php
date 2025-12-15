<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// php artisan make:controller MyController
class MyController extends Controller
{
    function __construct(){
        //middleware can be applied here
    }
    function index(){
        echo $_GET['num'];
        return $this->myfunction(); // non-case-sensitive
    }
    function process(Request $request){
        //echo $request->input('num');
        $data['mynum'] = $request->input('num');
        return view('myview.precess', $data);
    }
    function myfunction(){
        return view('myview.index');
    }
}
