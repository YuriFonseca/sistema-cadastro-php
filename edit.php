<?php
include('verifica.php');

    
    if(!empty($_GET['id']))
    {

        include_once('config.php');    

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios  WHERE id =$id";

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
  <form action="formulario.php" method="POST">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-12 col-xl-9">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-left">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase text-center">Cadastro de Clientes</h2>
                <br><br>

<div class="row">
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
  <div class="row">
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