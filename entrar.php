<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
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
            <input type="email" name="Email" autocomplete="off" placeholder="Entre com seu email">
            <img src="img\cadeado.png" >
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="Entrar">
            <a href="cadastro.php">Registre-se agora!</a>
        </form>

    </body>
</html>