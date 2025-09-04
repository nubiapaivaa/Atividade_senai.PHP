<?php
    function parOuimpar($num){
        if ($num % 2 == 0) {
            return "strong style='color: red;'>par</strong";
        } else {
            return "strong style='color: red;'>ímpar</strong";
        }
    }
    $num = $_POST['num'];
    echo "<h2> Par ou ímpar? </h2>";
    echo "O número $num é" .parOuimpar($num)
?>