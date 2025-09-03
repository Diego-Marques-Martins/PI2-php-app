<!DOCTYPE html>
<html>
<body>

<?php
$notas = [
    "Diego" => 8,
    "Davi" => 6,
    "Carlos" => 7
];

$somaNotas = 0;
$totalAlunos = count($notas);

foreach ($notas as $aluno => $nota) {
    $somaNotas += $nota;
    if ($nota >= 7) {
        echo "Aluno $aluno tirou nota $nota - Situação: <span style='color:blue;'>APROVADO</span><br>";
            } else {
                    echo "Aluno $aluno tirou nota $nota - Situação: <span style='color:red;'>REPROVADO</span><br>";
    }
}

$media = $somaNotas / $totalAlunos;
echo "<br>Média da turma: " , $media;
?>

</body>
</html>