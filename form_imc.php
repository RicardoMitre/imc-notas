<?php
    $peso1 = $_POST['peso'];
    $altura1 = $_POST['altura'];
    
    $peso = floatval(str_replace(',', '.', $peso1));
    $altura = floatval(str_replace(',', '.', $altura1));
    
    $result = $peso/pow(2, $altura);
    $result = number_format($result,2);

    if ($result < 17){
        $tipo = "muito abaixo do peso";
    } elseif ($result < 18.5) {
        $tipo = "abaixo do peso";
    } elseif ($result < 25) {
        $tipo = "peso normal";
    } elseif ($result < 30) {
        $tipo = "acima do peso";
    } elseif ($result < 35) {
        $tipo = "obesidade I";
    } elseif ($result < 40) {
        $tipo = "obesidade II (severa)";
    } else {
        $tipo = "obesidade III (mórbida)";
    }
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" type="text/css" href="css/imc.css">
    <title>Claculo de IMC</title>
</head>
<body>
   <div class="vertical"></div>

    <div class="box"><?php echo "Sua situação é: <strong>$tipo</strong>" ?></div>
    <div class="box"><?php echo "Seu imc é: <strong>$result</strong>" ?></div>

    
    <div>
        <table>
            <tr>
                <th>Resultado</th>
                <th>Situação</th>
            </tr>
            <tr>
                <td>Abaixo de 17</td>
                <td class="alinhar">Muito abaixo do peso</td>
            </tr>
            <tr>
                <td>Entre 17 e 18,49</td>
                <td class="alinhar">Abaixo do peso</td>
            </tr>
            <tr>
                <td>Entre 18,5 e 24,99</td>
                <td class="alinhar">Peso normal</td>
            </tr>
            <tr>
                <td>Entre 25 e 29,99</td>
                <td class="alinhar">Acima do peso</td>
            </tr>
            <tr>
                <td>Entre 30 e 34,99</td>
                <td class="alinhar">Obesidade I</td>
            </tr>
            <tr>
                <td>Entre 35 e 39,99</td>
                <td class="alinhar">Obesidade II (severa)</td>
            </tr>
            <tr>
                <td>Acima de 40</td>
                <td class="alinhar">Obesidade III (mórbida)</td>
            </tr>
        </table>
    </div>   
</body>
</html>

