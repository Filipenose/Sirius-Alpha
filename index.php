<!DOCTYPE html>
<html>
<?php
        if (isset($_SESSION)) {
            session_destroy();
            unset($_COOKIE['PHPSESSID']);
        } else {
            session_start();
            session_reset();
            session_destroy();
            unset($_SESSION);
        }
        if (isset($_COOKIE)) {
            unset($_COOKIE['PHPSESSID']);
        }
        ?>

<head>
	<meta charset="utf-8">
	<title>
		Sirius Beta
	</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	 <style>
      .card-login {
        padding: 100px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>

</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        SIRIUS
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="Controle/Logar.php" method="POST">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>

              </form>
            </div>

          </div>
          <div><a href='CadastroDeUsuario.php'><button class="btn btn-lg btn-info btn-block">Cadastrar</button></a></div>
        </div>
    </div>
  </body>

</html>