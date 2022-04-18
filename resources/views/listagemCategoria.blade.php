<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>News IFMS</title>
  </head>
  <body>
    <div class="container">
      <h1>Listagem de Categorias</h1>
      <a href="novo" class="btn btn-primary">Novo</a>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Descrição</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($categorias as $categoria) {
              echo "
              <tr>
                <td scope='row'>$categoria->id</td>
                <td>$categoria->descricao</td>
                <td>
                  <a href='editar/$categoria->id' class='btn btn-primary'>+</a>
                  <a href='excluir/$categoria->id' class='btn btn-danger'>-</a>
                </td>
              </tr>
              ";

            }
           ?>
        </tbody>
      </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
