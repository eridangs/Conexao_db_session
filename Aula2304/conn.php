<?php
$host= "127.0.0.1";
$user= "root";
$db= "usuario";
$senha= "";
$port= "3306";

mysqli_report(MYSQLI_REPORT_OFF);
$con = @new mysqli($host,$user,$senha,$db,$port);
if ($con -> connect_errno){
    echo "Falha na conexão: (".$con->connect_errno.")".$con-> connect_error;
}
else{
    echo "Conectado: ".$con->host_info. "\n";
}

?>