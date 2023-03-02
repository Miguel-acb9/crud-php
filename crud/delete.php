<?php 
    include("../config.php");

    $sql_update = "DELETE FROM usuarios WHERE id = ".$_REQUEST["id"].";";
    $resposta = $conexao->query($sql_update);

    if ($resposta == true) {
        echo "<h1>DELETE - Usuário</h1>";
        echo "<p>Usuário ".$_REQUEST["id"]." foi deletado com êxito.</p><br>";
        echo "<a href='../index.html'>VOLTAR</a>";
    }
    else {
        echo "<h1>DELETE - Usuário</h1>";
        echo "<p>Erro ao deletar usuário.</p><br>";
        echo "<a href='../index.html'>VOLTAR</a>";
    }
?>