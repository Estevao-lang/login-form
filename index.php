
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>login form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>

    
<header>

  

</header>
 
<div class="wrapper fadeInDown">
	<div id="formContent">
	  <!-- Tabs Titles -->
  
	  <!-- Icon -->
	  
  
	  <!-- Login Form -->
	  <form action="cadastro.php" method="post"> 
      <h2>Login</h2>
		<input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
		<input type="text" id="name" class="fadeIn third" name="name" placeholder="username">
		<input type="text" id="password" class="fadeIn third" name="password" placeholder="password">

		<input type="submit" class="fadeIn fourth" value="Log In">
	  </form>
  
	  <!-- Remind Passowrd -->
	  <div id="formFooter">
		<a class="underlineHover" href="#">Forgot Password?</a>
	  </div>
  
	</div>
  </div>


    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>