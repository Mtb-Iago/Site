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
            <input type="text" autocomplete="off" placeholder="Nome" id="nome">
            <label for="email">EMAIL</label>
            <input type="email"  autocomplete="off" placeholder="Entre com seu email" id="email">
            <label for="telefone">TELEFONE</label>
            <input type="text" autocomplete="off" placeholder="Contato" id="telefone">
            <label for="senha">SENHA</label>
            <input type="password" placeholder="Senha" id="senha">
            <label for="conf">CONFIRMA SENHA</label>
            <input type="password" placeholder="Confirma Senha" id="conf">
            <input type="submit" value="Cadastrar">
            

            
        </form>

    </body>
</html>