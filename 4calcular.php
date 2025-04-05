<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado:</h1>
    <pre>
<?php
$mensagem = $_POST['mensagem'] ?? '';

for ($i = 0; $i < 10; $i++) {
    echo $mensagem . "\n";
}
?>
    </pre>
    <a href="4index.php">Voltar</a>
</body>
</html>
