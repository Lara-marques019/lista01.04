<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contagem com Intervalo</title>
</head>
<body>
    <h1>Contar de 0 até um número com intervalo</h1>
    <form action="9calcular.php" method="post">
        <label for="numero">Digite o número final:</label><br>
        <input type="number" name="numero" id="numero" required><br><br>

        <label for="intervalo">Digite o intervalo:</label><br>
        <input type="number" name="intervalo" id="intervalo" min="1" required><br><br>

        <input type="submit" value="Contar">
    </form>
</body>
</html>
