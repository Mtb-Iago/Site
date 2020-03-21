<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastre-se</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/cadastrar.css" rel="stylesheet">
    </head>
    <body>
        
        <nav>  
    <!----direcionamento pelo url----->
        <ul>
            <li> <a href="comentarios.php">Comentarios</a></li>
            <li> <a href="entrar.php">Entrar</a></li>             
        </ul>
        </nav>

        
        <form method="POST">
            <h1>CADASTRE-SE</h1>
            <label for="nome">NOME</label>
            <input type="text" autocomplete="off" placeholder="Nome" name="nome" maxlength="40">
            <label for="email">EMAIL</label>
            <input type="email"  autocomplete="off" placeholder="Entre com seu email" name="email" maxlength="40">
            <label for="telefone">TELEFONE</label>
            <input type="text" autocomplete="off" placeholder="Contato" name="telefone" maxlength="11">
            <label for="senha">SENHA</label>
            <input type="password" placeholder="Senha" name="senha">
            <label for="conf">CONFIRMA SENHA</label>
            <input type="password" placeholder="Confirma Senha" name="confSenha">
            <input type="submit" value="Cadastrar">
            

            
        </form>

    </body>
</html>
<!-------------------php---------------------------->

<?PHP
// 1 - VERIFICAR SE ELA APERTOU O BOTAO CADASTRAR - ok
// 2 - GUARDAR DADOS DENTRO DE VARIAVEIS e verificar se esta vazia - ok
// 3 - ENVIAR DADOS COLHIDOS PARA A CLASSE , FUNCAO CADASTRAR
// 4 - VERIFICAR O RETORNO FALSE OU TRUE

if(isset($_POST['nome']))
{

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $senha = addslashes($_POST['senha']);
	$confSenha = addslashes($_POST['confSenha']);

	if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confSenha) )
	{
		if($senha == $confSenha)
		{
			require_once 'CLASSES/usuarios.php';
			$us = new Usuario("projeto_comentario","localhost","root","");
			if($us->cadastrar($nome, $email,$telefone, $senha))
			{ ?>
				<p class="mensagem1">Cadastrado com sucesso!<a href="entrar.php">Acesse já!</a></p> 
<?php		}else
			{ ?>
				<p class="mensagem">Email já está cadastrado!</p>
<?php		}
		}else
		{ ?>
			<p class="mensagem">Senhas não correspondem!</p>
<?php	}	
	}else
	{ ?>
		<p class="mensagem">Preencha todos os campos!</p>
<?php }
}
?>