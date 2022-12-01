<?php  
  
  session_start();
  include_once(conexao.php);
  
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
  $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
  $data_nascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_STRING);
  
  
 // echo "NOME:$nome <br>";
 // echo "email: $email <br>;
  
  $result_usuario = "INSERT INTO cadastro(email, senha, nome, sobrenome) VALUES ('$email', '$senha', '$nome', '$sobrenome', '$data_nascimento')";
  $resultado_usuario = mysqli_query($conn, $result_usuario);
  
  if(mysqli_insert_id($conn){
	  $_SESSION['msg'] = "<p styles='color:green;'>usuário cadastrado com sucesso</p>";
	  header("location: form.php");
  }else{ 
   $_SESSION['msg'] = "<p styles='color:red;'>usuário não foi cadastrado com sucesso</p>";
	header("location: form.php");
   