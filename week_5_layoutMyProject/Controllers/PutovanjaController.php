<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PutovanjaController extends Controller
{
    public function index(){
        return view('putovanja');
    }
}
