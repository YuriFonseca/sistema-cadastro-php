<?php
include('verifica.php');

    
    if(!empty($_GET['id']))
    {

        include_once('config.php');    

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id =$id";

        $result = $conexao ->query($sqlSelect);

        if($result -> num_rows > 0){
          while($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $endereco = $user_data['endereco'];
            $telefone = $user_data['telefone'];
            $numero = $user_data['numero'];
            $bairro = $user_data['bairro'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $cep = $user_data['cep'];
            $cnpj = $user_data['cnpj'];
            $email = $user_data['email'];
            $password = $user_data['password'];
          }

        }
        else{
          header('Location: painel.php');
        }
    }
    else{
      header('Location: painel.php');
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
   <form action="saveEdit.php" method="POST">
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
      <input type="email" name='email' class="form-control" value='<?php echo $email ?>' id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" name='password' class="form-control" value='<?php echo $password ?>'  id="inputPassword4" placeholder="Senha">
    </div>
    <div class="form-group col-md-6">
      <label for="inputName">Nome</label>
      <input type="text" name='name' class="form-control" id="inputName" value='<?php echo $nome ?>' placeholder="Nome Completo">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCNPJ">CNPJ</label>
      <input type="text" name='cnpj' class="form-control" id="inputCNPJ" value='<?php echo $cnpj ?>' placeholder="CNPJ">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" name='endereco' class="form-control" id="inputAddress" value='<?php echo $endereco ?>' placeholder="Nome da rua">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputBairro">Bairro</label>
      <input type="text" name='bairro' class="form-control" id="inputBairro" value='<?php echo $bairro ?>' placeholder="Bairro">
    </div>
    <div class="form-group col-md-2">
      <label for="inputNumber">Numero</label>
      <input type="text" name='number' class="form-control" id="inputNumber" value='<?php echo $numero ?>' placeholder="Nº da residência">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTel">Telefone</label>
      <input type="tel" name='telefone' class="form-control" id="inputTel" value='<?php echo $telefone ?>' placeholder="Telefone">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" name='cidade' class="form-control" id="inputCity" value='<?php echo $cidade ?>' placeholder="Cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" name='estado' class="form-control">
        <option selected><?php echo $estado ?></option>
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
      <input type="text" name='cep' class="form-control" id="inputCEP" value='<?php echo $cep ?>' placeholder="CEP">
    </div>
  </div>
            <br><br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
                  
                  
<button class="btn btn-success btn-lg px-5" name="update" id="update" type="update">Salvar</button>


          </div>
        </div>
      </div>
    </div>
  </form>
</section>
</body>
</html>