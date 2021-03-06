<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;
use Barryvdh\DomPDF\Facade\Pdf;

class CategoriaController extends Controller
{
  public function __construct(){
          $this->middleware('auth');
  }

    function relatorio() {
      $categorias = Categoria::all();
      $pdf = PDF::loadView('categoria.relatorio', compact('categorias'));
      return $pdf->download('categorias.pdf');
      //return view('categoria.relatorio',  compact('categorias'));

    }
    function lista() {
      $categorias = Categoria::all();
      return view('categoria.listagem',  compact('categorias'),
    );
    }
    function novo() {
      $categoria = new Categoria();
      $categoria->id = 0;
      $categoria->descricao = "";
      return view('categoria.formulario', compact('categoria'));
    }

    function salvar(Request $request) {
        $id = $request->input('id');
        if ($id == 0) {
          $categoria = new Categoria();
        } else {
          $categoria = Categoria::find($id);
        }
        $categoria->imagem = $request->input('imagem');
        if ($request->hasFile('arquivo')) {
          $path = $request->arquivo->store('public/imagens');
          $path = explode('/', $path);
          $len = count($path);
          $categoria->imagem = $path[$len-1];
        }
        $categoria->descricao = $request->input('descricao');
        $categoria->save();
        $mensagem = "Categoria $categoria->descricao foi salva";
        return
          redirect('categoria/lista')
            ->with(compact('mensagem'));
    }

    function editar($id) {
      $categoria = Categoria::find($id);
      return view('categoria.formulario', compact('categoria'));
    }

    function excluir($id) {
      $categoria = Categoria::find($id);
      $mensagem = "Categoria $categoria->descricao foi excluída";
      $categoria->delete();
      return redirect('categoria/lista')
        ->with(compact('mensagem'));

    }

    function url() {
      var_dump(url('categoria/salvar'));
    }

}
