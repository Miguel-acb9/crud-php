<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar</title>
</head>

<body>
    <h1>UPDATE - Usuário</h1>
    <h2>ID: <?php echo $_REQUEST["id"]; ?></h2>
    <section>
        <?php 
            include("./config.php");
            
            $sql_usuario = "SELECT * FROM usuarios WHERE id = ".$_REQUEST["id"].";";
            $resposta = $conexao->query($sql_usuario);
            $linha = $resposta->fetch_object();
        ?>
        <form action="crud/update.php?id=<?php echo $_REQUEST["id"]; ?>" method="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="id_nome" value="<?php echo $linha->nome; ?>">

            <label for="email">E-mail: </label>
            <input type="email" name="email" id="id_email" value="<?php echo $linha->email; ?>">

            <label for="senha">Senha: </label>
            <input type="text" name="senha" id="id_senha" value="<?php echo $linha->senha; ?>"><br>
            
            <input type="submit" value="Registrar">
        </form>
    </section>
    <a href='./index.html'>VOLTAR</a>
</body>
</html>