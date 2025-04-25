<?php
session_start();
include "conn.php";
include"verificacao.php";

$nome = mysqli_real_escape_string($con,$_POST['nome']);
$sobrenome = mysqli_real_escape_string($con,$_POST['sobrenome']);
$fone = mysqli_real_escape_string($con,$_POST['fone']);
$endereco = mysqli_real_escape_string($con,$_POST['endereco']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$sexo = mysqli_real_escape_string($con,$_POST['sexo']);

$query_insert = "insert into clientes values (null, '{$nome}','{$sobrenome}','{$fone}','{$endereco}','{$email}','{$sexo}');";

// echo $query_insert;

$result_insert = mysqli_query($con,$query_insert);

if ($result_insert == ''){
    echo"<script>
            alert('Não foi possível efetuar o cadastro');
            window.location.href = 'user.php';
    </script>";
    exit();}
else{
    echo "<script language: 'javascript'>
        window.alert('Cadastro efetuado com sucesso');
        window.location.href='user.php';
        </script>";
    exit();
}
?>