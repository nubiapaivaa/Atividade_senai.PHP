<?php
//Importa as classes
require_once 'Usuario.php';
require_once 'Professor.php';
require_once 'Aluno.php';

//Criando objetos
$professor = new Professor("Carol Marques", "carol@escola.com", "Matemática");
$professor2 = new Professor("Maria Rita", "maria@escola.com", "História");

$aluno1 = new Aluno("João Pedro", "joao@aluno.com", "2025A001");
$aluno2 = new Aluno("Nubia Paiva", "nubia@aluno.com", "2025A002");

//Exibindo informações dos professores
echo "<h2>Professores</h2>";
echo $professor->exibirInfo() . "<br>";
echo $professor->darAula() . "<br><br>";

echo $professor2->exibirInfo() . "<br>";
echo $professor2->darAula() . "<br><br>";

//Exibindo informações dos alunos
echo "<h2>Alunos</h2>";
echo $aluno1->exibirInfo() . "<br>";
echo $aluno1->estudar() . "<br><br>";

echo $aluno2->exibirInfo() . "<br>";
echo $aluno2->estudar() . "<br><br>";

?>