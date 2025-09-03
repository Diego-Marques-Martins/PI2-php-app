<?php $nome = $_POST['nome'] ?>
<?php $email = $_POST['email'] ?>

<!DOCTYPE html>
<body>
    <h2>Cadastro realizado!</h2>
    <p>Nome: <?php echo htmlspecialchars($nome); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($email); ?></p>
</body>
</html>