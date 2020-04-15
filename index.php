<?php
        require_once 'CLASSES/usuarios.php';
        session_start();
        
        if (isset($_SESSION['id_usuario']))
        {
            $us = new Usuario("projeto_comentarios","localhost","root","");
            $informacao = $us->buscarDados($_SESSION['id_usuario']);
            
        }  
        else
        
        if (isset($_SESSION['id_master']))
        {
            $us = new Usuario("projeto_comentarios","localhost","root","");
            $informacao = $us->buscarDados($_SESSION['id_master']);
        }
       



?>    

<!DOCTYPE html5>
    <html lang="pt-br">

    <head>
        <title>Deixe seu comentario..</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8">
        <script src="calculo.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" type="imagem/png" href="img/icon.png" />
    </head>

    <body>

        <nav>
            <!----direcionamento pelo url----->
            <ul> <?php
                    if(isset($_SESSION['id_master']))
                    { ?>
                        <li> <a href="dados.php">Dados</a> </li>
                        <?php  } 
                    ?>
               
                <li> <a href="comentarios.php">Comentarios</a></li>
                
                    <?php 
                        if (isset($informacao))//tem uma sessao iniciada
                        { ?>
                            <li> <a href="sair.php">Sair</a></li>
                        <?php }
                        else
                        { ?>
                            <li> <a href="entrar.php">Entrar</a></li>
                       <?php }
                    ?>
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
                    <div class="msg"></div>                    
                    <p class="resultadofinal"></p>
                    <p class="resultadofinal1"></p>
                    <p class="ni"></p>
                 
                </div>
             </div>
            </div>
        </section>
    <?php 
        if (isset($_SESSION['id_master']) || isset($_SESSION['id_usuario']))
        { ?> 
        
            <h2> 
                <?php echo "Olá ";
                       echo $informacao['nome'];
                       echo " , seja bem vindo(a)!"; 
                        
                ?>  

            </h2>
         
        <?php }  
    
    ?>
    <h3>CONTEÚDO QUALQUER</h3>
    </body>
    </html>