<?php
include('verifica.php');

    
    if(isset($_POST['submit']))
    {

        /*
        print_r('Nome: ' . $_POST['name']);
        print_r('<br>');
        print_r('Endereco: ' . $_POST['endereco']);
        print_r('<br>');
        print_r('Numero: ' . $_POST['number']);
        print_r('<br>');
        print_r('Bairro: ' . $_POST['bairro']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('CEP: ' . $_POST['cep']);
        print_r('<br>');
        print_r('CNPJ: ' . $_POST['cnpj']);
        print_r('<br>');
        print_r('Email: ' . $_POST['email']);*/

        include_once('config.php');    

        $nome = $_POST['name'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $numero = $_POST['number'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $cnpj = $_POST['cnpj'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $status = TRUE;
        $data = date('Y/m/d');
        
        
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,endereco,numero,bairro,cidade,estado,cep,cnpj,email,password,status,data,telefone) 
        VALUES('$nome','$endereco','$numero','$bairro','$cidade','$estado','$cep','$cnpj','$email',md5('$password'),'$status','$data','$telefone')");
        echo  "<script>alert('Cadastro efetuado com sucesso!');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
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
   <form action="formulario.php" method="POST">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-12 col-xl-20">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-left">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase text-center">Cadastro de Clientes</h2>
                <br><br>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name='email' class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" name='password' class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
    <div class="form-group col-md-6">
      <label for="inputName">Nome</label>
      <input type="text" name='name' class="form-control" id="inputName" placeholder="Nome Completo">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCNPJ">CNPJ</label>
      <input type="text" name='cnpj' class="form-control" id="inputCNPJ" placeholder="CNPJ">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" name='endereco' class="form-control" id="inputAddress" placeholder="Nome da rua">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputBairro">Bairro</label>
      <input type="text" name='bairro' class="form-control" id="inputBairro" placeholder="Bairro">
    </div>
    <div class="form-group col-md-2">
      <label for="inputNumber">Numero</label>
      <input type="text" name='number' class="form-control" id="inputNumber" placeholder="Nº da residência">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTel">Telefone</label>
      <input type="tel" name='telefone' class="form-control" id="inputTel" placeholder="Telefone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" name='cidade' class="form-control" id="inputCity" placeholder="Cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" name='estado' class="form-control">
        <option selected>Escolher...</option>
        <option value="AC">Acre</option>
        <option value="AL">Alagoas</option>
        <option value="AP">Amapá</option>
        <option value="AM">Amazonas</option>
        <option value="BA">Bahia</option>
        <option value="CE">Ceará</option>
        <option value="DF">Distrito Federal</option>
        <option value="ES">Espírito Santo</option>
        <option value="GO">Goiás</option>
        <option value="MA">Maranhão</option>
        <option value="MT">Mato Grosso</option>
        <option value="MS">Mato Grosso do Sul</option>
        <option value="MG">Minas Gerais</option>
        <option value="PA">Pará</option>
        <option value="PB">Paraíba</option>
        <option value="PR">Paraná</option>
        <option value="PE">Pernambuco</option>
        <option value="PI">Piauí</option>
        <option value="RJ">Rio de Janeiro</option>
        <option value="RN">Rio Grande do Norte</option>
        <option value="RS">Rio Grande do Sul</option>
        <option value="RO">Rondônia</option>
        <option value="RR">Roraima</option>
        <option value="SC">Santa Catarina</option>
        <option value="SP">São Paulo</option>
        <option value="SE">Sergipe</option>
        <option value="TO">Tocantins</option>
        <option value="EX">Estrangeiro</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" name='cep' class="form-control" id="inputCEP" placeholder="CEP">
    </div>
  </div>
            <br><br>
                  
                  
<button class="btn btn-success btn-lg px-5" name="submit" type="submit">Novo</button>


          </div>
        </div>
      </div>
    </div>
  </form>
</section>
</body>
</html>