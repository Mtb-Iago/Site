<?php
session_start();
require_once 'CLASSES/comentarioBd.php';
$c = new comentario("projeto_comentario","localhost","root","");
$coments = $c->buscarComentario();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Deixe seu comentário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/comentarios.css" rel="stylesheet">
    </head>
    <body>
    <nav>
    <!----direcionamento pelo url----->
        <ul>
            <li> <a href="index.php">Inicio</a></li>
            <?php
               if (isset($_SESSION['id_master']))
                { ?>
                    <li> <a href="dados.php">Dados</a></li>
               <?php }

                if(isset($_SESSION['id_usuario']) || isset($_SESSION['id_master']))
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
    <div id="Largura-pagina">
    <section id="conteudo1">
        <h1>vamos aqui colocar suas infos do seu site, do seu negocio, quem
        sabe fechamos negocio lore impusin isso aei;</h1>
        <img src="img\computador.jpg">
        <p class="texto">É um fato há muito estabelecido que um leitor se distrairá com o conteúdo legível de uma página ao analisar seu layout. O ponto de usar o Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, em vez de usar 'Conteúdo aqui, conteúdo aqui'.</p>
        <p class="texto"> 1. O ponto de usar o Lorem Ipsum</p>
        <p class="texto"> 2. È que ele tem uma distribuição de letras</p>
        <p class="texto">3. Lorem Ipsum é que ele tem uma distribuição</p>
        <p class="texto">4. letras mais ou menos normal</p>
        <!-------sessao de comentarios do site--------->
       
       
        <?php //se nao existe uma sessao o comentario não aparece para escrever
        if(!isset($_SESSION['id_usuario']) && !isset($_SESSION['id_master'])){ 
          ?> <h2>Comentários</h2> 
       <?php }
        
        elseif (isset($_SESSION['id_usuario']) || isset($_SESSION['id_master'])) { ?>
            
        <h2>Deixe seu comentário</h2>
        <form method="POST">
        
        <img src="img\perfil.png">
        <textarea name="Texto"  placeholder="Participe da discussão" maxlength="400"></textarea> <!---placeholder texto que apaga quando se clica no botao---->
        <input type="submit" value="PUBLICAR COMENTARIO"> <!--value e o nome que fica no botao-->
        </form>
           
       <?php }
        ?>
        

        <?php
        
            if($coments > 0)
            {   
                foreach ($coments as $v ) {//pega tudo da posicao do array e coloca e executa na variavel v 
                ?>
                    <div id="area-comentario">
                    <img src="img\perfil.png">
                    <h3> <?php echo $v['nome_pessoa']; ?> </h3>
                    <h4> <?php
                        $data = new DateTime($v['dia']);//formata a data
                        echo $data->format('d/m/Y');//formata a data
                        echo " - ";
                        echo $v['horario'];  ?>
                         <?php
                         if (isset($_SESSION['id_usuario'])) {
                             //verificando se o comentario realmente e dele
                            if(($_SESSION['id_usuario']) == $v['fk_id_usuario'])//testa para ve se o que esta logado é o adm ou usuario comun
                            //para imprimir somente a sessao que de uma unica verificação.
                            { ?>
                                <a href="comentarios.php?id_exc=<?php  echo $v['id']; ?>">Excluir</a> </h4>
                 <?php      }   
                           } elseif (isset($_SESSION['id_master']))//verificando se é o adm
                           { ?>
                                <a href="comentarios.php?id_exc=<?php echo $v['id']; ?>">Excluir</a> </h4>
                 <?php     }
                         
                        
                         ?>
                         
                    <p> <?php echo $v['comentario']; ?> </p>
               <?php }
            }
            else
            {

            }
       /* echo "<pre>";
        var_dump($coments);//vizualizar  o conteudo da varivel ordenada
        echo "</pre>"; */
        ?>
       
                   
        </section>
        <section id="conteudo3">
            <div>
                <h5>Saiba mais sobre como fazer</h5>
                <p>Analisar seu layout. O ponto de usar o Lorem Ipsum é que ele tem uma distribuição de letras mais ou menos normal, em vez de usar 'Conteúdo aqui, conteúdo aqui'.</p>
                
            </div>
            
        </section>
        
        </div>  
    </body>
</html>
<!-------------------pegar id da exlclusao--------------------->
<?php
    if(isset($_GET['id_exc']))
    {
        $id_e = addslashes($_GET['id_exc']);
       
        if(isset($_SESSION['id_master']))
        {
            $c->excluirComentario($id_e, $_SESSION['id_master']);
        }
        
        elseif (isset($_SESSION['id_usuario']))
        {
            $c->excluirComentario($id_e, $_SESSION['id_usuario']);
        }
        header("location: comentarios.php");
    

    }


?>
<!-------------------inserir comentario------------------------>
<?php 

    if(isset($_POST['Texto']))//se tiver texto post
    {
        $texto = addslashes($_POST['Texto']);//add o texto na variave texto
            if(isset($_SESSION['id_master']))//se for comentario adm
            {
                $c->inserirComentario($_SESSION['id_master'],$texto);//inserir o comentario na variavel c
            }
            elseif (isset($_SESSION['id_usuario']))
            {
                $c->inserirComentario($_SESSION['id_usuario'],$texto);
            }
    header("location: comentarios.php");
       
    }

?>