<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProfessorController extends Controller
{
    //
    function lista() {
      // faz o que tem que fazer
      // obtem dados
      // manda para visão renderizar
      $professores = DB::table('professor')
        ->where('nome', 'like', '%ano%')
        ->get();
      return view('listagemProfessor',
      ['professores'=> $professores]);
    }
}
