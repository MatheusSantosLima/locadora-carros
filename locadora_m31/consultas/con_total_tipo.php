<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
    <link rel="stylesheet" type="text/css" href="../estilos/geral.css"> 
</head>
<body>
    <h1>Faturamento por tipo</h1>
    <div class="flex-container">
    <div class="box">  
        <fieldset>
            <table border="1"><tr><th width="50%">Bairro</th><th>Média de valores locados</th></tr>
        <?php
        include("../controle/conexao.php");
        try{
            $sql = "SELECT t.tipo, SUM(c.valor) FROM carro c
            INNER JOIN tipo t ON t.cod_tipo=c.tipo_carro
            Group BY t.tipo ORDER BY SUM(c.valor) DESC";
            foreach ($conn->query($sql) as $row ) {
                print "<tr><td>" .$row['tipo']."</td>
                       <td class='valores' width='25%'>R$ ".number_format($row['SUM(c.valor)'],2,",",".")."</td></tr>";
            }
        }catch(PDOException $ex){
            echo 'Erro '. $ex->getMessage();
        }
        ?>
    </table><br><a href='http://localhost/locadora_m31'>Voltar</a>
    </fieldset></div></div></body></html>