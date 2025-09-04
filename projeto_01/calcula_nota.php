<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO DAS NOTAS</title>
</head>
<body>
    <h1>Resultado da Nota!💡</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $disciplina = htmlspecialchars($_POST['disciplina']);
            $nota = floatval($_POST['nota']);
            if ($nota >= 7) {
                echo "<h2>Disciplina: $disciplina</h2>";
                echo "<p style='color: green;'>Aprovado com nota: $nota</p>";
            } elseif ($nota >= 5) {
                echo "<h2>Disciplina: $disciplina</h2>";
                echo "<p style='color: orange;'>Recuperação com nota: $nota</p>";
            } else {
                echo "<h2>Disciplina: $disciplina</h2>";
                echo "<p style='color: red;'>Reprovado com nota: $nota</p>";
            }
        } else {
            echo "<p>Nenhum dado foi enviado.</p>";
        }
    ?>
</body>
</html>