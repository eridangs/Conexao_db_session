<?php
session_start(); //necessario ter em todas as paginas de cliente e admin
include("conn.php");
if (empty($_POST['nome'])||empty($_POST['senha'])){
    header("location: index.php");
    exit();
}
//Informações vindas do front
$nome = mysqli_real_escape_string($con,$_POST['nome']);
$senha = mysqli_real_escape_string($con,$_POST['senha']);

// Integração com o DB
$query = "select * from usuarios where nome = '{$nome}' and senha = '{$senha}' ";
$result = mysqli_query( $con ,$query);
$row = mysqli_num_rows($result);

$retorno = mysqli_fetch_array($result); // nao entendi bem essa parte

if ($row>0){
    $_SESSION['nome'] = $nome;
    $_SESSION['setor'] = $retorno['setor'];
    echo $_SESSION['setor'];

    // header("location: admin.php");
    // exit();

    if ($_SESSION['setor'] == 'admin'){
        header('location: admin.php');
        exit();
    }
    else if ($_SESSION['setor'] == 'user'){
        header('location: user.php');
        exit();
    }

}else{
    header('location: index.php');
    exit();
}

