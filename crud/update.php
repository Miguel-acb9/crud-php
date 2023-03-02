<?php 
    include("../config.php");

    $nome  = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql_update = "UPDATE usuarios SET nome='".$nome."' , email='".$email."' , senha='".$senha."' WHERE id = ".$_REQUEST["id"].";";
    $resposta = $conexao->query($sql_update);

    if ($resposta == true) {
        echo "<h1>UPDATE - Usuário</h1>";
        echo "<p>Usuário ".$_REQUEST["id"]." foi atualizado com êxito.</p><br>";
        echo "<a href='../index.html'>VOLTAR</a>";
    }
    else {
        echo "<h1>CREATE - Usuário</h1>";
        echo "<p>Erro ao atualizar usuário.</p><br>";
        echo "<a href='../index.html'>VOLTAR</a>";
    }
?>