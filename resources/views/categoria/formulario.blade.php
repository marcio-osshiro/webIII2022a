@extends('template')

@section('conteudo')
  <form class="container" action="<?php echo url('categoria/salvar');?>" method="post">
     @csrf
    <h1>Cadastro de Categoria</h1>
    <div class="form-group">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $categoria->id ?>">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $categoria->descricao ?>">
    </div>
    <button type="submit" class="btn btn-primary">Gravar</button>
  </form>
@endsection
