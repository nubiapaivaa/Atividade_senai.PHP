<?php

    $pessoa = ["nome" => "joão", "idade" => 30];
    echo "Meu nome é $pessoa[nome] e eu tenho $pessoa[idade] anos";
   
?>
<p> olá aqui é um HTML:</p>
<?php
    $aluno=["nome" => "joão", "idade" => 16, "nota"=> 100];
    echo"Olá $aluno[nome], você tem $aluno[idade] anos e sua nota é $aluno[nota]";
    $ano= 2025-$aluno["idade"];
    echo("<p> Você nasceu em " . $ano . ".</p>");
    //echo "Voce nasceu no ano de 2007

    $hoje = date('d-m-Y');
    Echo "Hoje e $hoje ";

    $dia = date(' j ');
    Echo "Hoje, $dia é dia nacional da Habitação </p>";

    
    Echo "São exatamente 09:09";
?>