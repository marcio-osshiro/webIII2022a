<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Listagem Categoria</title>
    <style>
      table, h1 {
        width: 90%;
        margin: 0 auto;
      }
      table {
        border-collapse: collapse;
      }
      td, th {
        border: 1px solid black;
        padding: 0.25rem;
        font-size: 1.25rem;
      }
    </style>
  </head>
  <body>
    <h1>Listagem de Categorias</h1>
    <table>
      <thead>
        <tr>
          <th></th>
          <th>ID</th>
          <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($categorias as $categoria)
          <tr>
            <td>
              @if($categoria->imagem != "")
              <img src='{{storage_path("app/public/imagens/$categoria->imagem")}}' style="width: 40px">
              @endif
            </td>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->descricao}}</td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </body>
</html>
