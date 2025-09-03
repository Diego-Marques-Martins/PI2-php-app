<?php $nota = 8;?>

<!DOCTYPE html>
<body>
    <h1>Resultado</h1>

    <?php
    if ($nota >= 7) {
        echo "<p>Aluno aprovado </p>";
    } else {
        echo "<p>Aluno reprovado </p>";
    }
    ?>
</body>
</html>