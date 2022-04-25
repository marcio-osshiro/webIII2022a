<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>News IFMS</title>
  </head>
  <body>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
