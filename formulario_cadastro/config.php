<?php

    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = '';
    $dbName = "usuarios";

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    // $conexao = new mysqli("localhost","root","","usuarios");
    
    $nome = $_POST["fname"];
    $cpf = $_POST["cpf"];
    $email=$_POST["email"];
    $telefone=$_POST["telefone"];
    $sexo=$_POST["sexo"];
    $nasc=$_POST["nascimento"];
    $cidade=$_POST["cidade"];
    $estado=$_POST["estado"];
    $hoje = date('d/m/Y');

    $result = mysqli_query($conexao, "INSERT INTO cadastro (Nome,CPF,Email,Telefone,Sexo,DtNascimento,Cidade,Estado,outros) 
    VALUES ('$nome', '$cpf', '$email', '$telefone', '$sexo', '$nasc', '$cidade', '$estado', '$hoje')");

    if ($result == TRUE){
            echo "SUCESSO";
            header("Location: index.html");
        }
        else{
            echo "ERRO";
            header("Location: cadastro.html");
        }



    // TESTES
    // if($conexao == TRUE){
    //     echo "SUCESSO";
    // }
    // else{
    //     echo "ERRO";
    // }

    // var_dump($nome);
    // print_r("<br>");
    // var_dump($cpf);
    // print_r("<br>");
    // var_dump($email);
    // print_r("<br>");
    // var_dump($telefone);
    // print_r("<br>");
    // var_dump($sexo);
    // print_r("<br>");
    // var_dump($nasc);
    // print_r("<br>");
    // var_dump($cidade);
    // print_r("<br>");
    // var_dump($estado);