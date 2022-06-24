<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="estilos\geral.css">
</head>
<body>
<h1>Locadora M31-Acesso</h1>
<div class="flex-container">
<div id="box">
	<fieldset>
	<h3>Acesso</h3>
	<table>
		<form  method="POST" action="controle/logar_usuario.php">
			<label>Usuario</label>
			<?php
			include("controle/conexao.php");
			try{
				$sql = 'SELECT * FROM usuario ORDER BY usuario'; 
				print "<select name='cmb_usuario'>";
				foreach($conn->query($sql)as $row) {
					print "<option value='" .$row['cod_usuario']."'>".$row['usuario']."</option>";
				}
				print "</select>";
			}
			catch(PDOException $ex) {
				echo 'Erro '.$ex->getMessage();
			}
			?><br><br>
			<label>Senha</label>
			<input type="password" name="psw_senha>
			<input type="submit value="Acessar">
		</form></table></fieldset><br></div></div></body></html>
			