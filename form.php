<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="form.css" />
  <title>StreetWorld</title>
</head>

<body>
  <div class="fullForm">
    <div class="logo">
      <img src="https://static.nike.com.br/v10-10-2/images/brands/jordan.svg" alt="logo jordan" />
    </div>
    <header>
      <h1>TORNE-SE UM MEMBRO DA STREETWORLD</h1>
      <p>
        Crie seu perfil de membro da StreetWorld consiga acesso antecipado às
        melhores comunidades, inspirações e aos produtos StreetWorld.
      </p>
	  <?php
	  if(isset($_SESSION['msg']))
		  echo $_SESSION['msg'];
			unset ($_SESSION['msg']);
	  ?>
    </header>
    <form class="box-login" method="post" action="processa.php">
      <fieldset>
        <div class="mail">
          <label for="email"></label>
          <input type="email" id="email" name="email" placeholder="Endereço de e-mail" required />
        </div>
        <div class="pass">
          <label for="senha"></label>
          <input type="password" id="senha" name="senha" placeholder="Senha" required />
        </div>
        <div class="name">
          <label for="nome"></label>
          <input type="text" id="nome" name="nome" placeholder="Nome" required />
        </div>
        <div class="second-name">
          <label for="sobre"></label>
          <input type="text" id="sobre" name="sobrenome" placeholder="SobreNome" />
        </div>
        <div class="time">
          <label for="data"></label>
          <input type="date" id="data" name="nascimento" placeholder="Data de nascimento" />
          <button id="button" type="submit">
            Junte-se a nós
          </button>
        </div>
      </fieldset>
    </form>
  </div>
</body>

</html>