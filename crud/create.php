<?php 
    include("../config.php");

    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql_create = "INSERT INTO usuarios (nome, email, senha) VALUES ('{$nome}', '{$email}', '{$senha}');";
    $resposta = $conexao->query($sql_create);

    if ($resposta == true) {
        echo "<h1>CREATE - Usuário</h1>";
        echo "<p>Usuário {$conexao->insert_id} foi criado com êxito.</p><br>";
        echo "<a href='../index.html'>VOLTAR</a>";
    }
    else {
        echo "<h1>CREATE - Usuário</h1>";
        echo "<p>Erro ao cadastrar usuário.</p><br>";
        echo "<a href='../index.html'>VOLTAR</a>";
    }
?>