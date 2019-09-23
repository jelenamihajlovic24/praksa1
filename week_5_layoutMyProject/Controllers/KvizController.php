<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KvizController extends Controller
{ 
    public function index(){
    return view('kviz');
    }
}
