<html5>
    <html lang="pt-br">

    <head>
        <title>Deixe seu comentario..</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="calculo.js"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <nav>
            <!----direcionamento pelo url----->
            <ul>
                <li> <a href="comentarios.php">Comentarios</a></li>
                <li> <a href="entrar.php">Entrar</a></li>
            </ul>
        </nav>

        
        <!-----------------Sessao de calculo----------------->
        <section>
           <div id="conteiner">
               
           
                <h2>Calcular média</h2>

                <p> Primeira nota:</p>
                <input class="nota1" type="text" placeholder="nota da 1ºunidade">
                <!--a diferença entre type text/~type number e que em number pode obter numeradores--->
                <p>Segunda nota:</p>
                <input class="nota2" type="text" placeholder="nota da 2ºunidade">
                <p>Terceira nota:</p>
                <input class="nota3" type="text" placeholder="nota da 3ºunidade">
                
                <button class="botao" onclick="clicar()">Resultado</button>
                <!-----botao receber o calculo da função clicar() do js------>
                
                

                    <p class="resultado"></p>
                    <!----classe resultado imprime o resultado obtido em js------>
                    <p class="msg"></p>                    
                    <p class="resultadofinal"></p>
                    <p class="resultadofinal1"></p>
                    <p class="ni"></p>
                 
                </div>
             </div>
            </div>
        </section>
    </body>

    </html>