<!DOCTYPE html>
<html>
<body>

<?php
$notas = [
    "Ana" => 8,
    "João" => 6,
    "Maria" => 9
];

$somaNotas = 0;
$totalAlunos = count($notas);

foreach ($notas as $aluno => $nota) {
    $somaNotas += $nota;
    if ($nota >= 7) {
        echo "Aluno $aluno tirou nota $nota - Situação: <span style='color:blue; font-weight:bold;'>APROVADO</span><br>";
    } else {
        echo "Aluno $aluno tirou nota $nota - Situação: <span style='color:red; font-weight:bold;'>REPROVADO</span><br>";
    }
}

$media = $somaNotas / $totalAlunos;
echo "<br>Média da turma: " , number_format($media, 2);
?>

</body>
</html>