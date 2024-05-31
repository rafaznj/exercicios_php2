<?php

function consumo($tempo, $potencia) {

    $tempo *=30;

    $consumoMes = ($tempo * $potencia) / 1000;


    return $consumoMes;
}

function custo($previconsumo) {
if ($previconsumo <= 30){
    $custo = $previconsumo * 0.11882;
}
else if ($previconsumo == 31 || $previconsumo <= 100){
    $custo = $previconsumo * 0.20370;
}
else if ($previconsumo == 101 || $previconsumo <= 220){
    $custo = $previconsumo * 0.30555;
}
else if ($previconsumo > 220){
    $custo = $previconsumo * 0.33951;
}

return $custo;
}

?>