<?php  
  
  session_start();
  include_once('./conexao.php');
  
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
  $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
  $nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
  
  $result_usuario = "INSERT INTO cadastro(email, senha, nome, sobrenome, nascimento) VALUES ('$email', '$senha', '$nome', '$sobrenome', '$nascimento')";

  $resultado_usuario = mysqli_query($conn, $result_usuario);
  
  if(mysqli_insert_id($conn)){
	  $_SESSION['msg']="<p style='color:green;'>usuário cadastrado com sucesso</p>";
	  header("location: form.php");
  } else { 
   $_SESSION['msg'] = "<p style='color:red;'>usuário não foi cadastrado com sucesso</p>";
	  header("location: form.php");
  }