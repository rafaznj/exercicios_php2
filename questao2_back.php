<?php

function financiar($valorProduto,$meses,$taxa)
{
    $valorFinal = $valorProduto + ($valorProduto * ($taxa/100) * $meses);

    $juros = $valorFinal - $valorProduto;

    $parcela = $valorFinal / $meses;

    $resultados = array($valorFinal,$juros,$parcela);

    return $resultados;


}

?>