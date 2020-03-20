<html5>
<html lang="pt-br">
    <head>
        <title>ENTRAR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/entrar.css" rel="stylesheet">
    </head>
    <body>
        
        <nav>  
    <!----direcionamento pelo url----->
        <ul>
            <li> <a href="comentarios.php">Comentarios</a></li>
            <li> <a href="index.php">Inicio</a></li>             
        </ul>
        </nav>

        <span>Nyabinghi <br> Tecnology </span>
        <form method="POST">
            <h1>Acesse a sua conta</h1>
            <img src="img\envelope.png" >
            <input type="email" name="email" autocomplete="off" placeholder="Entre com seu email" maxlength="40">
            <img src="img\cadeado.png" >
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="Entrar">
            <a href="cadastrar.php">Registre-se agora!</a>
        </form>

    </body>
</html>

<?php

if(isset($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	if(!empty($email) && !empty($senha))
	{
		require_once 'CLASSES/usuarios.php';
		$us = new Usuario("projeto_comentario","localhost","root","");
		if($us->logar($email, $senha))
		{
			header("location: index.php");
		}else
		{
			echo "Email e/ou senha estão incorretos!";
		}
	}else
	{
		echo "Preencha todos os campos!";
	}
}

?>