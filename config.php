<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'tsecret';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno){
    //   echo "Ocorreu um erro :(";  
    // }
    // else{
    //     echo "huuuruuuu conectado com sucesso :)";
    // }

?>