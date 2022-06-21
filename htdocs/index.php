<?php

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $conn = mysqli_connect("localhost:3306","root","","informacoes");

    mysqli_query($conn, "INSERT INTO dados(nome, idade, sexo, email, telefone) VALUES('$nome', '$idade', '$sexo', '$email', '$telefone')");

?>
