<?php 
    include("../config.php");

    $sql_read = "SELECT * FROM usuarios;";
    $resposta = $conexao->query($sql_read);

    if ($resposta == true) {
        echo "<h1>READ - Usuários</h1>";
        if ($resposta->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>NOME</th>";
            echo "<th>E-MAIL</th>";
            echo "<th>SENHA</th>";
            echo "<th>CRIADO EM</th>";
            echo "<th>OPÇÕES</th>";
            echo "</tr>";
            while ($linha = $resposta->fetch_object()) {
                echo "<tr>";
                echo "<td>".$linha->id."</td>";
                echo "<td>".$linha->nome."</td>";
                echo "<td>".$linha->email."</td>";
                echo "<td>".$linha->senha."</td>";
                echo "<td>".$linha->criado_em."</td>";
                echo "<td><a href='../atualizar.php?id=".$linha->id."'>ATUALIZAR</a> <a href='./delete.php?id=".$linha->id."'>EXCLUIR</a></td>";
                echo "</tr>";
            }
            echo "</table><a href='../index.html'>VOLTAR</a>";
        }
        else {
            echo "<p>Não há dados na tabela!</p>";
        }
    }
    else {
        echo "<h1>CREATE - Usuário</h1>";
        echo "<p>Erro ao buscar usuários.</p><br>";
        echo "<a href='../index.html'>VOLTAR</a>";
    }
?>