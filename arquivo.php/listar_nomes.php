<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="listar_nomes.php" method="post">
        <label>Nome do aluno:</label>
        <input type="text" name="aluno" required>
        <input type="submit" value="Enviar">  
    </form>
    <h3>Lista de alunos:</h3>
    <?php
    //Inserir nome no arquivo nomes.txt
        $nome_aluno = $_POST['aluno']?? '';
        $arquivo = fopen("nomes.txt", "a");
    fwrite($arquivo, $nome_aluno . "\n");
    fclose($arquivo);
    //Listar os nomes do arquivo nomes.txt
    $arquivo = fopen("nomes.txt", "r");
    while (!feof($arquivo)) {
        echo fgets($arquivo) . "<br>";
    }
    fclose($arquivo);
    
    ?>
</body>
</html>