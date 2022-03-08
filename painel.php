<?php
include('verifica.php');
include_once('config.php');

$sql = "SELECT * FROM usuarios ORDER BY id DESC";


$result = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <style>
      .table.table.text-white.table-bg {
    background: rgba(0,0,0,0.3);

}
    </style>
     <!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="stylelog.css">
    <link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark justify-content-center">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="http://127.0.0.1/painel.php#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://127.0.0.1/formulario.php#">Cadastro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
  </li>
</ul>
</nav>


<section class="vh-100 gradient-custom">

  <div class="m-5">
    <table class="table text-white table-bg">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Endereço</th>
          <th scope="col">Numero</th>
          <th scope="col">Bairro</th>
          <th scope="col">Cidade</th>
          <th scope="col">Estado</th>
          <th scope="col">CEP</th>
          <th scope="col">CNPJ</th>
          <th scope="col">Email</th>
          <th scope="col">Status</th>
          <th scope="col">Data</th>
          <th scope="col">Telefone</th>
          <th scope="col">...</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while ($user_data = mysqli_fetch_assoc($result)) {
            echo"<tr>";
            echo"<td>".$user_data['id']."</td>";
            echo"<td>".$user_data['nome']."</td>";
            echo"<td>".$user_data['endereco']."</td>";
            echo"<td>".$user_data['numero']."</td>";
            echo"<td>".$user_data['bairro']."</td>";
            echo"<td>".$user_data['cidade']."</td>";
            echo"<td>".$user_data['estado']."</td>";
            echo"<td>".$user_data['cep']."</td>";
            echo"<td>".$user_data['cnpj']."</td>";
            echo"<td>".$user_data['email']."</td>";
            echo"<td>".$user_data['status']."</td>";
            echo"<td>".$user_data['data']."</td>";
            echo"<td>".$user_data['telefone']."</td>";
            echo"<td>
              <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
              </svg></a>
              <a class ='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
              </svg></a>
            </td>";
          }

        ?>

      </tbody>
    </table>
      </div>

</section>
</body>
</html>



