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
$quantidade = isset($_POST['quantidade']) ? (int)$_POST['quantidade'] : 0;

if ($mensagem && $quantidade > 0) {
    for ($i = 0; $i < $quantidade; $i++) {
        echo $mensagem . "\n";
    }
} else {
    echo "Dados inválidos. Verifique e tente novamente.";
}
?>
    </pre>
    <a href="5index.php">Voltar</a>
</body>
</html>
