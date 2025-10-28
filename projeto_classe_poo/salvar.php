<?php
require_once 'Usuario.php';
require_once 'Professor.php';
require_once 'Aluno.php';

//Caminho do aluno JSON
$banco = 'banco.json';

//Ler dados do arquivo JSON
$dados = [];
if (file_exists($banco)) {
    $json = file_get_contents($banco);
    $dados = json_decode($json, true);
}

//Receber dados do formulário
$tipo = $_POST['tipo'] ?? '';
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';

if ($tipo === 'professor') {
    $disciplina = $_POST['disciplina'] ?? '';
    $professor = new Professor($nome, $email, $disciplina);
    $dados['Professor'][] = [
        'nome' => $usuario->getNome(),
        'email' => $usuario->getEmail(),
        'disciplina' => $usuario->getDisciplina()
    ];
} elseif ($tipo === 'aluno') {
    $matricula = $_POST['matricula'] ?? '';
    $aluno = new Aluno($nome, $email, $matricula);
    $daddos[] = [
        'tipo' => 'aluno',
        'nome' => $aluno->getNome(),
        'email' => $aluno->getEmail(),
        'matricula' => $aluno->getMatricula()
    ];
}
//Salvar dados no arquivo JSON
file_put_contents($banco, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "<h2>Dados salvos com sucesso!</h2>";
echo "<a href='cadastro.html'>Voltar</a><br>";
echo "<a href='index.php'>Ver Usuários</a>";
?>