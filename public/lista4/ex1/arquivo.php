<!DOCTYPE html>
<html>
<body>

<h2>Digite um número para ver a sua tabuada:</h2>

<form method="post" action="">
    <label for="numero">Número:</label>
    <input type="number" name="numero" id="numero" required>
    <input type="submit" value="Ver Tabuada">
</form>

<?php {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    echo "<h3>Tabuada do $numero:</h3>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }
}
}
?>
</body>
</html>