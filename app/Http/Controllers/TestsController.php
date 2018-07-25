<?php

namespace App\Http\Controllers;

use App\Test;

class TestsController extends Controller
{
    // ***Here we define function to use in routes after @sign***
    public function index(){
        //  $tests = DB::table('test')->get();
        $tests = Test::all();
        return view('tests/index' , compact('tests'));
    }
    public function show(Test $test){
            // $tests = DB::table('test')->find($id);
            // $test = Test::find($id);
            return view("tests/show" , compact('test'));
    }
}
