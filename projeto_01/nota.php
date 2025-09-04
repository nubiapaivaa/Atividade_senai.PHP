<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTAS</title>
</head>
<body>
    <h1>Formulário de Notas.⚡</h1>
    <form action="calcula_nota.php" method="post">
        Disciplina: <br>
        <input type="text" name="disciplina"> <br><br>
        Nota: <br>
        <input type="number" name="nota" step="0.01" min="0" max="10"> <br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>