<?php
include("../controle/conexao.php");
try{
    $sql= 'SELECT cod_bairro, bairro FROM bairro ORDER BY bairro';
    foreach ($conn->query($sql)as $row) {
        print $row['cod_bairro']."";
        print $row['bairro']."<br>";
    }
}
catch(PDOException $ex){
    echo 'Erro' .$ex->getMessage();
}
?>