<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Repetir Palavra ou Frase</title>
</head>
<body>
    <h1>Repetir Palavra ou Frase X Vezes</h1>
    <form action="5calcular.php" method="post">
        <label for="mensagem">Digite a palavra ou frase:</label><br>
        <input type="text" name="mensagem" id="mensagem" required><br><br>

        <label for="quantidade">Quantidade de vezes:</label><br>
        <input type="number" name="quantidade" id="quantidade" min="1" required><br><br>

        <input type="submit" value="Repetir">
    </form>
</body>
</html>
