<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormularioController extends Controller
{
    public function index(){
        return view('menu.registro');
    }
}
