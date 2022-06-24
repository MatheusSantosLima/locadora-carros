<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora </title>
    <link rel="stylesheet" type="text/css" href="estilos/geral.css">
</head>
<body>
    <h1>Tipo por montadora</h1>
    <div class="flex-container">
    <div id="box">
        <Table border="1"><tr><th width="50%">Montadora</th><th>Quantidade</th></tr>
    <?php
    include("../controle/conexao.php");
    try{
        $sql = "SELECT COUNT(c.valor), m.montadora From carro c
        INNER JOIN tipo t ON t.cod_tipo=c.tipo_carro
        INNER JOIN montadora m ON m.cod_montadora=c.montadora_carro
        GROUP BY m.montadora Order BY t.tipo";
        foreach($conn->query($sql) as $row) {
            print "<tr><td>" .$row['montadora']."</td>
                   <td class= 'valores' width='25%' ".$row['COUNT(c.valor)']."</td></tr>";
        }
    }catch(PDOException $ex) {
        echo 'Erro '.$ex->getMessage();
    }
    ?></table><br><a href='http://locadora_m31'>Voltar</a>
</body>
</html>