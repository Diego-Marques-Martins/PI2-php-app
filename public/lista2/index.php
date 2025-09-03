<?php
$filme = "";
$genero = "";
$mensagem = "";

    $filme = $_POST["filme"] ?? "";
    $genero = $_POST["genero"] ?? "";

    if ($genero === "terror") {
        $mensagem = "<p style='color: red;'>Filme: $filme  (Gênero: $genero)<br>
            Atençao! filme de Terror cadastrado.</p>";
    } elseif ($genero === "comédia" || $genero === "comedia") {
        $mensagem = "<p style='color: green;'>Filme: $filme (Gênero: $genero)<br>
            Esse filme promete boas risadas!</p>";
    } else {
        $mensagem = "<p>Filme: $filme  (Gênero: $genero)</p>";
    }
?>
<?php $imagem = "filme.png";?>

<!DOCTYPE html>

<body>
<?php include 'cabecalho.php'; ?>

<img src="<?= $imagem ?>" alt="Filme" width="150">

<form method="POST" action="index.php">
    <label>Nome do Filme:</label>
    <input type="text" name="filme" required><br><br>

    <label>Gênero:</label>
    <input type="text" name="genero" required><br><br>

    <button type="submit">Enviar</button>
</form>


<div>
    <?= $mensagem ?>
</div>

<?php include 'rodape.php'; ?>

</body>
</html>