<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ListadoController extends Controller
{
   public function index(){
       return view('menu.listado');
   }
}
