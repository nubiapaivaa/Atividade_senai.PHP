<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $sinal = $_POST['sinal'];

    // Verifica se os valores são numéricos
    if (is_numeric($valor1) && is_numeric($valor2)) {
        switch ($sinal) {
            case '+':
                echo $valor1 + $valor2;
                break;
            case '-':
                echo $valor1 - $valor2;
                break;
            case '*':
                echo $valor1 * $valor2;
                break;
            case '/':
                if ($valor2 != 0) {
                    echo $valor1 / $valor2;
                } else {
                    echo "Erro: divisão por zero.";
                }
                break;
            default:
                echo "Operador inválido.";
                break;
        }
    } else {
        echo "Erro: valores devem ser numéricos.";
    }
} else {
    echo "Envie os dados usando o método POST.";
}
?>