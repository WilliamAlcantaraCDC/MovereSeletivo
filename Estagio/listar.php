<?php
include_once './conexao2.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Listar Maior Venda</title>
    </head>
    <body>
        <h1>Listar Maior Venda</h1>
        <?php
        //SQL para selecionar os registros
        $result_msg_cont = "SELECT * FROM clientes where valor = (select max(valor) from clientes)";

        //Seleciona os registros
        $resultado_msg_cont = $conn->prepare($result_msg_cont);
        $resultado_msg_cont->execute();

        while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)) {
           
            echo "Nome: " . $row_msg_cont['nome'] . "<br>";
            echo "Data: " . $row_msg_cont['datavenda'] . "<br>";
            echo "Valor: " . $row_msg_cont['valor'] . "<br><hr>";
        }
        ?>
    </body>
</html>
