<?php
include('verifica.php');
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
<h2>Olá, <?php echo $_SESSION['email']; ?></h2>
<h2><a href='logout.php'>Sair</a></h2>
</section>
</body>
</html>



