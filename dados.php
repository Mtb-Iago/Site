<?php
session_start();
if(!isset($_SESSION['id_master'])){
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>DADOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/dados.css" rel="stylesheet">
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
                <td>COMENTARIOS</td>
            </tr>
            <tr>
                <td>1</td>
                <td>ANA</td>
                <td>ANA@HOTMAIL.COM</td>
                <td>1</td>          
            
            </tr>
            <tr>
                <td>2</td>
                <td>MARIO</td>
                <td>MARIO@HOTMAIL.COM</td>
                <td>1</td>          
            
            </tr>
            <tr>
                <td>3</td>
                <td>JOSE</td>
                <td>JOSE@HOTMAIL.COM</td>
                <td>1</td>          
            
            </tr>
            <tr>
                <td>4</td>
                <td>MARIA</td>
                <td>MARIA@HOTMAIL.COM</td>
                <td>1</td>          
            
            </tr>
            <tr>
                <td>5</td>
                <td>IGOR</td>
                <td>IGOR@HOTMAIL.COM</td>
                <td>1</td>          
            </tr>
            
            
            
        </table>
    </body>
</html>