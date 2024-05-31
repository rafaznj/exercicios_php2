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
    $nota1 = $_POST["txtNota1"];
    $nota2 = $_POST["txtNota2"];
    $nota3 = $_POST["txtNota3"];
    $tipo = $_POST["tipomedia"];

    include "questao3_back.php";

    $media = mediaAluno($nota1,$nota2, $nota3, $tipo);
    ?>
    
    <h1> A média do aluno: <?php echo $media ?></h1>

</body>
</html>