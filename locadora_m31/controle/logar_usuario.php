<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos/geral.css">
</head>
<body>
<h1>Busca de usuario</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $usuario = $_POST['cmb_usuario'];
    $senha = $_POST['psw_senha'];
    $sql="SELECT cod_usuario FROM usuario Where cod_usuario='$usuario'";
    $conn->query($sql);
    $query = $conn->prepare($sql);
    $result = $query->execute();
    $cod_user = $query->fetchcolumn();
    if(['cod_user']== '1'){
        echo "Acesso Liberado";
    }else{
        echo "Tente outra vez";
    }    
}
catch(PDOException $ex){
    echo 'Erro '.$ex->getMessage();
}
?>

</fieldset></div></div></body></html>