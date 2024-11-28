<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /*Metodo  para mostrar la lista de cursos*/
    public function index(){
    return view( "cursos.index");
    }
    //Metodo para crear un nuevo curso
    public function create(){
    return view("cursos.create");
    }

    //Metodo para mostrar un curso en especifico
    public function show($curso){
        return view("cursos.show",[ "curso" => $curso]);
    }
}
