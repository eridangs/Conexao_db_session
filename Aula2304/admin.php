<?php
session_start();
include("conn.php");
include"verificacao.php";


$query = "select * from usuarios";
$result = mysqli_query( $con ,$query);

?>
<a href="logout.php">Sair</a><br/>
<!-- $retorno = mysqli_fetch_all($result);
// echo $retorno['nome'];
// echo $retorno['senha'];
// echo $retorno['setor']; -->

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Senha</th>
                <th>Setor</th>
            </tr>
        </thead>
        <?php while ($retorno = mysqli_fetch_array($result)){?>
        <tbody>
            <tr>
                <td>
                    <?php echo $retorno['nome'];?>
                </td>
                <td>
                    <?php echo $retorno['senha'];?>
                </td>
                <td>
                    <?php echo $retorno['setor'];?>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>

</html>