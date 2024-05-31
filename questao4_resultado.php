<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "referencias.php" ?>
</head>
<body>
    <?php

    $tempo = $_POST["txtHoras"];
    $potencia = $_POST["txtPot"];
    $previconsumo = $_POST["txtPrevi"];

    include "questao4_back.php";


    $consumoMes = consumo($tempo, $potencia);
    $custo = custo($previconsumo);

    ?>

    <h1>O aparelho irá consumir <?php echo $consumoMes; ?> kW/hora no período.</h1>
    <h1>O aparelho irá gastar R$<?php echo $custo; ?> kW/hora no período.</h1>



</body>
</html>