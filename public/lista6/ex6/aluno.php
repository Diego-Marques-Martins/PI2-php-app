<?php
function calcularMedia($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3) / 3;
    return $media;
}

function verficarSituação($media) {
    if ($media >= 7) {
        return "Aprovado";;
    } else {
        return "Reprovado";
    }
}
$mediaDiego = calcularMedia(7, 8, 9);
$MediaDavi = calcularMedia(6, 5, 4);

$situaçãoDiego = verficarSituação($mediaDiego);
$situaçãoDavi = verficarSituação($MediaDavi);

echo "Média de Diego: " , $mediaDiego , "<br>";
echo "Situação de Diego: " , $situaçãoDiego , "<br><br>";

echo "Média de Davi: " , $MediaDavi , "<br>";
echo "Situação de Davi: " , $situaçãoDavi , "<br><br>";
?>