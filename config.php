<?php 

    $dbHost = 'LocalHost';       // Host Local
    $dbUsername = 'root';       // loguin do bd
    $dbPassword = '';           //senha do bd
    $dbName = 'cadastro';       //Nome do BD

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName); //conexão do banco 

   /* if ($conexao->connect_errno)
    {
        echo ' erro';
    }
    else 
    {
        echo 'deu bom';
    }*/



?>