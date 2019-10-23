<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ListadoController extends Controller
{
   public function index(){
    
       $lista_pacientes = DB::table('solicitud_de_pabellon')->get();
       //var_dump($lista_pacientes);
       /*foreach ($lista_pacientes as $lista){
        $lista->dv;

       }*/

       return view('menu.listado', array(
           "lista" => $lista_pacientes
       ));
   }


}
