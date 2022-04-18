<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    function lista() {
      $categorias = DB::table('categoria')->get();
      return view('listagemCategoria', ['categorias'=> $categorias]);
    }
    function novo() {
      $categoria = new Categoria();
      $categoria->id = 0;
      $categoria->descricao = "";
      return view('formularioCategoria', ['categoria'=> $categoria]);
    }

    function salvar(Request $request) {
        $id = $request->input('id');
        if ($id == 0) {
          $categoria = new Categoria();
          $categoria->descricao = $request->input('descricao');
          $categoria->save();
        } else {
          $categoria = Categoria::find($id);
          $categoria->descricao = $request->input('descricao');
          $categoria->save();
        }
        return redirect('categoria/lista');
    }

    function editar($id) {
      $categoria = Categoria::find($id);
      return view('formularioCategoria', ['categoria'=> $categoria]);
    }

    function excluir($id) {

    }

}
