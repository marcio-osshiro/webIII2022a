@extends('template')

@section('conteudo')
  <form class="container" action="<?php echo url('noticia/salvar');?>" method="post">
     @csrf
    <h1>Cadastro de Notícia</h1>
    <div class="form-group">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $noticia->id ?>">
    </div>
    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $noticia->titulo ?>">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="titulo" name="descricao" value="<?php echo $noticia->descricao ?>">
    </div>
    <div class="form-group">
      <label for="data">Data</label>
      <input type="date" class="form-control" id="data" name="data" value="<?php echo $noticia->data ?>">
    </div>
    <div class="form-group">
      <label for="autor">Autor</label>
      <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $noticia->autor ?>">
    </div>
    <div class="form-group">
      <label for="categoria_id">Categoria</label>
      <input type="text" class="form-control" id="categoria_id" name="categoria_id" value="<?php echo $noticia->categoria_id ?>">
    </div>
    <button type="submit" class="btn btn-primary">Gravar</button>
  </form>
@endsection
