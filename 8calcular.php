<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada Resultado</title>
</head>
<body>
    <h1>Tabuada:</h1>
    <pre>
<?php
$numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
}
?>
    </pre>
    <a href="8index.php">Voltar</a>
</body>
</html>
