<?php
    include "conexao.php"; // inclui o arquivo de conexão
    $result = mysqli_query($conexao, "SELECT * FROM user"); // exemplo de consulta
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <section id="form-container">
        <form id="form-login">
            <h2>Login</h2>
            <input type="text" class="info-input">
            <input type="text" class="email">
        </form>
    </section>
</body>
</html>