<?php

function mediaAluno($nota1, $nota2, $nota3, $tipo)
{

if ($tipo == "Aritmética") {
$media = ($nota1 + $nota2 + $nota3) / 3;
}

else{
    $media = ($nota1 * 5 + $nota2 * 3 + $nota3 * 2) / 10;
}

return $media;
}
?>