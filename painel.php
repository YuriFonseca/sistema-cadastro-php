<?php
include('verifica.php');
include_once('config.php');

$sql = "SELECT u.*,
CASE u.status
WHEN '0' THEN 'INATIVO'
WHEN '1' THEN 'ATIVO'
END AS status_cliente
FROM usuarios u;";


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
      table{
        border: 1px solid;
        width: 100%;
        margin-top: 13%;
  


      }

      thead {
        background-color: rgba(24, 50, 199, 0.8);
        color: white;
      }

      td {
        background-color: white;
        font-weight: 500;
        color: black;
      }




}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
        <link rel="stylesheet" type="text/css" href="nav.css">




</head>
<body>
<nav class="navbar navbar-light bg-light shadow">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Logo</span>

    <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<div class="modal true" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MENU</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <ul class="list-group list-group-flush">
          <a class='linka' href='painel.php'><li class="list-group-item">HOME</li></a>
          <a href='formulario.php'><li class="list-group-item">Cadastro</li></a>
          <a class='linka' href='painel.php'><li class="list-group-item">APLICATIVO</li></a>
          <a class='linka' href='painel.php'><li class="list-group-item">CONTATOS</li></a>
          <a href='logout.php'> <li class="list-group-item">Logout</li></a>
        </ul>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container text-center">
<div class="mb-2">
    <div class="table-responsive">
      <table class="table text-white table-bg table align-middle">
        <thead>
          <tr class=>
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
              echo"<td>".$user_data['status_cliente']."</td>";
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
  </div>


          </div>
        </div>
      </div>
    </div>
  </form>

  
</div>
</body>
</html>
