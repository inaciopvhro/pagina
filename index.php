<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Gerenciamento Pedidos</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    

    <header class='navbar sticky-top bg-dark flex-md-nowrap p-0 shadow' data-bs-theme='dark'>
    <a class='navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white' href='#'>Inacio Informatica</a></header>

    <main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'>
    <h2>Pedidos do Cliente</h2>
    <p>Insira algum valor para pesquisa</p>
    <input class='form-control' id='myinput' type='text' placeholder='Buscar..'>
    <br>
    <div class='table-responsive small'>
    <table class='table table-striped table-sm'>
    <thead>
      <tr>
        <th scope='col'>#</th>
         <th scope='col'>idPedido</th>
         <th scope='col'>Data Abertura</th>
         <th scope='col'>Data Fechamento</th>
         <th scope='col'>Nome Cliente</th>
         <th scope='col'>Sub Total</th>
         </tr>
         </thead>
         <tbody id='myTable'>
         <?php
          $link = mysqli_connect("147.79.86.208","inaciolocal","Inacio@2628","SistemaDeclaracao");

          if($link === false) {
            die("ERROR: could not connect. " . mysqli_connect_error());
          }
          $sql = "SELECT idpedidos, dataabertura, datafechamento, nomecliente, subtotalpago FROM VWPEDIDOS";
          $result = $link->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["idpedidos"] . "</td>";
                echo "<td>" . $row["dataabertura"] . "</td>";
                echo "<td>" . $row["datafechamento"] . "</td>";
                echo "<td>" . $row["nomecliente"] . "</td>";
                echo "<td>" . $row["subtotalpago"] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "0 resultados";
            }
            mysqli_close($link);
            ?>
          </tbody>
          </table>
      </div>
    </main>
  </body>
<script src="bootstrap.bundle.min.js"></script>

</html>
