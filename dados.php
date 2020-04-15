<?php
session_start();
if(!isset($_SESSION['id_master'])){
    header("location: index.php");
}
require_once 'CLASSES/usuarios.php';
$us = new Usuario("projeto_comentarios","localhost","root","");
$dados = $us->buscarTodosUsuarios();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>DADOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/dados.css" rel="stylesheet">
        <link rel="icon" type="imagem/png" href="img/icon.png" />

    </head>
    <body>
        
    <nav>  
    <!----direcionamento pelo url----->
        <ul>
            <li> <a href="comentarios.php">Comentarios</a></li>
            <li> <a href="index.php">Inicio</a></li>             
            <li> <a href="sair.php">Sair</a></li>
        </ul>
        </nav>
        <table>
            <tr id="titulo">
                <td>ID </td>
                <td>NOME</td>
                <td>EMAIL</td>
                <td>TELEFONE</td>
                <td>COMENTARIOS</td>
            </tr>
            <?php
            if (Count($dados)>0) {
               foreach ($dados as $v ) { ?>
                <tr>
                <td> <?php echo $v['id']; ?> </td>
                <td> <?php echo $v['nome']; ?> </td>
                <td> <?php echo $v['email']; ?> </td>
                <td> <?php echo $v['telefone']; ?> </td>
                <td> <?php echo $v['quantidade'];?></td>          
            
            </tr>
              <?php }
            }
            else {
                echo "Ainda não há usuarios cadastrados!";
            }
            
            ?>
            
                       
            
            
        </table>
    </body>
</html>