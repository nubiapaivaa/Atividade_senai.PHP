<?php
// Pegando os valores da URL
$valor1 = $_GET['valor1'] ?? 0;
$valor2 = $_GET['valor2'] ?? 0;
$sinal  = $_GET['sinal'] ?? '';

// Verificando a operação
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
            echo "Erro: divisão por zero!";
        }
        break;
    default:
        echo "Operador inválido!";
}
?>