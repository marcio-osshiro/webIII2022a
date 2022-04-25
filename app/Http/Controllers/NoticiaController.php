<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    //
    function lista() {
      $noticias = DB::table('noticia')->get();
      return view('listagemNoticia', compact('noticias'));
    }

    function novo() {
      $noticia = new Noticia();
      $noticia->id = 0;
      return view('formularioNoticia', compact('noticia'));
    }

    function salvar(Request $request) {
      $id = $request->input('id');
      if ($id == 0) {
        $noticia = new Noticia();
      } else {
        $noticia = Noticia::find($id);
      }
      $noticia->titulo = $request->input('titulo');
      $noticia->descricao = $request->input('descricao');
      $noticia->data = $request->input('data');
      $noticia->autor = $request->input('autor');
      $noticia->categoria_id = $request->input('categoria_id');
      $noticia->save();
      return redirect('noticia/lista');

    }

    function editar($id) {
      $noticia = Noticia::find($id);
      return view('formularioNoticia', compact('noticia'));
    }

    function excluir($id) {
      $noticia = Noticia::find($id);
      $noticia->delete();
      return redirect('noticia/lista');

    }

}