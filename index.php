<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Deixe seu comentario..</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="calculo.js"></script> 
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
    <nav>
    <!----direcionamento pelo url----->
        <ul>
            <li> <a href="comentarios.php">Comentarios</a></li>
            <li> <a href="">Entrar</a></li>             
        </ul>
    </nav>
    <h3>CONTEUDO QUALQUER!!!!</h3>
   <!-----------------Sessao de calculo----------------->
    <section>
         <div class="centro">
        primeira nota:
        <input class="nota1" type="text"><br><!--a diferença entre type text/~type number e que em number pode obter numeradores--->
        segunda nota:
        <input class="nota2" type="number"><br>
        terceira nota:
        <input class="nota3" type="number"><br>
        <button onclick="clicar()">Resultado</button>
        <!-----botao receber o calculo da função clicar() do js------>
        
        <p class="resultado"></p><br>
        <!----classe resultado imprime o resultado obtido em js------>
        <p class="msg"></p>
        <p class="resultadofinal"></p>
        <p class="resultadofinal1"></p>
        <p class="ni"></p>
        
         </div>
    </section>
    </body>
</html>