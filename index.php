<!doctype html>
<html lang="pt-br" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Controle de Pedidos</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <?php
    $link = mysqli_connect("147.79.86.208","inaciolocal","Inacio@2628","BancoBot");

    if($link === false) {
      die("ERROR: could not connect. " . mysqli_connect_error());
    }
    echo "<br>";

    $sql = "SELECT id, contato, nome, grupo, datacadastro FROM contatos";
    $result = $link->query($sql);

    echo "<header class='navbar sticky-top bg-dark flex-md-nowrap p-0 shadow' data-bs-theme='dark'>"
    echo "<a class='navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white' href='#'>Inacio Informatica</a></header>"

    echo "<main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'>"
    echo "<h2>Gerenciamento de Contatos</h2>";
    echo "<p>Insira algum valor para pesquisa</p>";
    echo "<input class='form-control' id='myinput' type='text' placeholder='Buscar..'>";
    echo "<br>";
    echo "<div class='table-responsive small'>"
    echo "<table class='table table-striped table-sm'>"
    echo  "<thead>";
    echo  "<tr>";
         echo "<th scope='col'>#</th>";
         echo "<th scope='col'>Contato</th>";
         echo "<th scope='col'>Nome</th>";
         echo "<th scope='col'>Grupo</th>";
         echo "<th scope='col'>Data Cad</th>";
         echo "</tr>";
         echo "</thead>";
         echo "<tbody id='myTable'>";
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["contato"] . "</td>";
                echo "<td>" . $row["nome"] . "</td>";
                echo "<td>" . $row["grupo"] . "</td>";
                echo "<td>" . $row["datacadastro"] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "0 resultados";
            }
          echo "</tbody>"
          echo "</table>"

          mysqli_close($link);
          
      echo "</div>"
    echo "</main>"
    ?>
  </div>

<script src="bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
