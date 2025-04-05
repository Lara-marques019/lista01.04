<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Números Pares Decrescentes:</h1>
    <pre>
<?php
$numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

if ($numero >= 0) {
    for ($i = $numero; $i >= 0; $i--) {
        if ($i % 2 === 0) {
            echo $i . "\n";
        }
    }
} else {
    echo "Por favor, digite um número positivo.";
}
?>
    </pre>
    <a href="7index.php">Voltar</a>
</body>
</html>
