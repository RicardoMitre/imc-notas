<?php
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    
    $notax = floatval(str_replace(',', '.', $nota1));
    $notay = floatval(str_replace(',', '.', $nota2));
    
    $result = ($notax+$notay)/2;
    $result = number_format($result,2);
    if ($result < 4) {
        $tipo = "reprovado";
    } elseif ($result < 6) {
        $tipo = "exame final";
    } else {
        $tipo = "aprovado";
    }

    if ($nome == "") {
        $nome = "fulano";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" type="text/css" href="css/notas.css">
    <title>Calculo de Notas</title>
</head>
<body>
    <div class="vertical"></div>
    <div class="box"><?php echo " <strong>$nome</strong> sua nota final é: <strong>$result</strong>" ?></div>
    <div class="box"><?php echo " <strong>$nome</strong> sua stituação é: <strong>$tipo</strong>" ?></div>
    
    <table>
        <tr>
            <th>Media</th>
            <th>Situação</th>
        </tr>
        <tr>
            <td>Abaixo de 4,0</td>
            <td class="alinhar">Reprovado</td>
        </tr>
        <tr>
            <td>Maior ou igual a 4,0,<br> menor que 6.0</td>
            <td class="alinhar">Exame final</td>
        </tr>
        <tr>
            <td>Maior ou igual a 6,00</td>
            <td class="alinhar">Aprovado</td>
        </tr>
    </table>
</body>
</html>