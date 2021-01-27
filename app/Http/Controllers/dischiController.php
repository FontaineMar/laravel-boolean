<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Disco;

class dischiController extends Controller
{
    public function index(){
        $data = Disco::all();
        
        return view('dischi', compact('data'));
    }
}
