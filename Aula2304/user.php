<?php
include "conn.php";
include "verificacao.php";

if ($_SESSION['setor'] != 'user'){
    header('location: index.php');
    exit();
}
// echo "nome = ".$_SESSION['nome']."<br>";
// echo "setor = ".$_SESSION['setor']."<br>";
?>
<a href="logout.php">Sair</a><br/>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessão do Usuário</title>
</head>
<body>
    <form action="action_user.php" method="POST">
        <p>Nome</p><input type="text" name="nome">
        <p>Sobrenome</p><input type="text" name="sobrenome">
        <p>Fone</p><input type="text" name="fone">
        <p>Endereço</p><input type="text" name="endereco">
        <p>Email</p><input type="text" name="email">
        <p>Sexo</p><input type="text" name="sexo">
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>