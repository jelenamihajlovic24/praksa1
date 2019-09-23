<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RodjPoklonController extends Controller
{
    public function index(){
        return view('rodjendanski_poklon');
    }
}
