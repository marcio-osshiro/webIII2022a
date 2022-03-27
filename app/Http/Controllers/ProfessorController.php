<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    //
    function lista() {
      // faz o que tem que fazer
      // obtem dados
      // manda para visão renderizar
      return view('listagemProfessor');
    }
}
