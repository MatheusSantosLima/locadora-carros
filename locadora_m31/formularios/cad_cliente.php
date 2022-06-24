<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Cadastro de cliente</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/inserir_cliente.php">
	<label>Cliente:</label>
    <input type="text" name="txt_cliente"/><br>
    <label>CPF:</label>
    <input type="text" name="txt_cpf"/><br>
    <label>Bairro:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM bairro ORDER BY bairro';
  print "<select name='cmb_bairro'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_bairro']."'>".$row['bairro']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?><br><br>
	<input type="submit" value="Cadastrar">
</form>
</fieldset></div></div></body></html>
