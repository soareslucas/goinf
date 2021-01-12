<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'].'<br>'.$_POST['telefone'];
  $to = "lucas.soarod@gmail.com";
  $assunto = $_POST['assunto'];
  mail($to,$assunto,$mensagem);

  die('foi ok');
?>