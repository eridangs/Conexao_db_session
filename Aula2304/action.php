<?php
session_start(); //necessario ter em todas as paginas do adm
include("conn.php");
if (empty($_POST['nome'])||empty($_POST['senha'])){
    // header("location: index.php");
    exit();
}
$nome = mysqli_real_escape_string($con,$_POST['nome']);
$senha = mysqli_real_escape_string($con,$_POST['senha']);
$query = "select * from usuarios where nome = '{$nome}' and senha = '{$senha}' ";
$result = mysqli_query( $con ,$query);
$row = mysqli_num_rows($result);
echo $row;

if ($row>0){
    $_SESSION['nome'] = $nome;
    header("location: admin.php");
    exit();
}else{
    header('location: index.php');
    exit();
}