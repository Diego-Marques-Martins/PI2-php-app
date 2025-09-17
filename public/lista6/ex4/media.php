<?php
function calcularMedia($nota1, $nota2, $nota3) {
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return $media;
}

$mediaAluno = calcularMedia(7, 8, 9);

echo "A média do aluno é: " , $mediaAluno;
?>