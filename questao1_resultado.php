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
    $pol = $_POST["txtValor"];
    include "questao1_back.php";

    $cm = converterCM($pol);

    echo "<h1>Resultado em cm $cm";

?>
    
</body>
</html>