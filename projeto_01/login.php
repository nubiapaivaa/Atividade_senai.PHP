<?php
   require_once 'funcoes.php'; // Inclui o arquivo com as funções
 
   $usuario = $_POST['usuario'] ?? '';
   $senha = $_POST['senha'] ?? '';

    if (conecta($usuario, $senha)) {
         // Autenticação bem-sucedida
     
           header("Location: painel.php");   
               exit;
     } else {
           // Autenticação falhou
           $msg = urlencode("Usuário ou senha inválidos!");
           header("Location: index.php?msg=$msg");
           exit;
      }

?>