<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Persona;

class UsersController extends Controller
{
    public function index(){
        $data = Persona::all();
        
        return view('users', compact('data'));
    }

    public function show($url){
        $user = Persona::find($url);
        return view('user', compact('user'));
    }
}
