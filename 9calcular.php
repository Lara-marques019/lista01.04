<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Contagem</title>
</head>
<body>
    <h1>Resultado:</h1>
    <pre>
<?php
$numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
$intervalo = isset($_POST['intervalo']) ? (int)$_POST['intervalo'] : 1;

if ($intervalo <= 0) {
    echo "O intervalo deve ser maior que 0.";
} else {
    for ($i = 0; $i <= $numero; $i += $intervalo) {
        echo $i . "\n";
    }
}
?>
    </pre>
    <a href="9index.php">Voltar</a>
</body>
</html>
