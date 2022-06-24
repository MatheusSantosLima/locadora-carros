<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css"> 
</head>
<body>
<h1>Atualização de Carro</h1>
    <div class="flex-container">
    <div class="box">
        <form method="POST" action="../controle/atualizar_cliente.php">
            <h3>Escolha o carro a ser modificado</h3>
          <?php
          include("../controle/conexao.php");
          try{
            $sql = 'SELECT * FROM carro';
            print "<select name='cod_carro'>";
            foreach($conn->query($sql)as $row) {
                print "<option value='".$row['cod_carro']."'>".$row['carro']." - ".$row['cpf']."</option>";
            }
            print"</select>";
          }catch(PDOException $ex) {
            echo 'Erro '.$ex->getMessage();
          }
          ?>
          <br><h3>Digite um novo nome para o cliente</h3><br>
          <input type="text" name="up_carro">
          <br><h3>Digite um novo cpf para o cliente</h3><br>
          <input type="text" name="up_cpf">
          <br><h3>Selecione um novo bairro para o cliente</h3><br>
          <?php
          include("../controle/conexao.php");
          try{
            $sql = 'SELECT * FROM bairro';
            print "<select name='up_bairro_cliente'>";
            foreach ($conn->query as $row) {
                print "<option value='".$row['cod_bairro']."'>".$row['bairro']."</option>";
            }
            print "</select>";
          }catch(PDOException $ex) {
            echo 'Erro '.$ex->getMessage();
          }
          ?>
          </form></div></div></body></html>
</body>
</html>