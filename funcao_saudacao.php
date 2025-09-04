<?php
    //Esta é uma função
    //inicio da função saudacao
    function saudacao($nome) {
        return "Olá, $nome!<br>";
    }
    //fim da função saudacao
    echo saudacao("Nubia Paiva");
    //Definição da função
    function nomeDaFuncao($parametro1, $parametro2) {
        //Código que será executado
        $resultado = $parametro1 + $parametro2;
        return $resultado; // retorna um valor
    }
    // Chamando a função
    $frase = saudacao("Nubia Paiva");
    $soma= nomeDaFuncao(5, 10);
    echo "$frase O resultado é: $soma";
?>
