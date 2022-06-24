<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css"> 
    <title>Projeto Locadora</title>
</head>
<body>
    <h1>Recibo</h1>
    <div class="flex-container">
    <div id="box">
    <fieldset>
        <form method='POST'action='/locadora_m31/consultas/con_itens.php'>
            <label >Imprimir Recibo</label>
            <?php
            include ("../controle/conexao.php");
            try{
                $sql='SELECT cod_locacao FROM locacao ORDER BY cod_locacao DESC LIMIT 1';
                $conn->query($sql);
                $query = $conn->prepare($sql);
                $result = $query->execute();
                $codloc = $query->fetchColumn();
                echo "<input type='hidden' name='locacao' value='".$codloc."'>";   
            }catch(PDOException $ex){
                echo 'Erro'.$ex->getMessage();
            }
            ?>
            <input type='submit'name='Recibo' value='ok'>
        </form></fieldset></div></div></body></html>