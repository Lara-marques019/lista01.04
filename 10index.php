<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contagem Regressiva com Intervalo</title>
</head>
<body>
    <h1>Contar do número até 0 com intervalo</h1>
    <form action="10calcular.php" method="post">
        <label for="numero">Digite o número inicial:</label><br>
        <input type="number" name="numero" id="numero" required><br><br>

        <label for="intervalo">Digite o intervalo:</label><br>
        <input type="number" name="intervalo" id="intervalo" min="1" required><br><br>

        <input type="submit" value="Contar">
    </form>
</body>
</html>
