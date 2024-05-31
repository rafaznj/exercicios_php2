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
        $valorProduto = $_POST["txtValor"];
        $taxa = $_POST["txtTaxa"];
        $meses = $_POST["selectMeses"];

        include "questao2_back.php";

        $resultados = financiar($valorProduto,$meses,$taxa);
      
    ?>

    <h1>Valor final R$ <?php echo $resultados[0]; ?> </h1>
    <h1>Juros do período R$ <?php echo $resultados[1]; ?> </h1>
    <h1>Valor da parcela R$ <?php echo number_format($resultados[2],2); ?></h1>

</body>
</html>