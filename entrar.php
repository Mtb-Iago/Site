<!DOCTYPE html5>
<html lang="pt-br">
    <head>
        <title>ENTRAR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8">
        <link href="css/entrar.css" rel="stylesheet">
        <link rel="icon" type="imagem/png" href="img/icon.png" />


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
            <div id="senhaform">
            <img src="img\cadeado.png" >
            <input type="password" name="senha" placeholder="Senha" id="senha">
            </div>
           <button onclick="mostrarSenha()"  type="button" ></button>
             
           <input type="submit" value="Entrar">
            <a href="cadastrar.php">Registre-se agora!</a>
        </form>
        <script>
            function mostrarSenha(){
                let tipo = document.getElementById("senha");
                if (tipo.type == "password"){
                    tipo.type = "text";
                }else{
                    tipo.type = "password";
                }
            }
        </script>

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
		$us = new Usuario("projeto_comentarios","localhost","root","");
		if($us->logar($email, $senha))
		{
			header("location: index.php");
		}else
		{ ?>
			<p> "Email e/ou senha estão incorretos!";</p>
		<?php }
	}else
	{ ?>
		    <p> "Preencha todos os campos!";</p>
	<?php }
}

?>