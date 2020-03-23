<?php

    class Usuario
{
    private $pdo;
    //construtor
    public function __construct($dbname, $host, $usuario, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $usuario, $senha);
        } catch (PDOException $e) {
            echo "Erro com BD: ".$e->getMessage();
        } catch (Exception $e) {
            echo "Erro: ".$e->getMessage();
        }
    }
    //função cadastar
    public function cadastrar($nome, $email, $telefone, $senha)
    {
        //antes de cadastrar verificar se ja email cadastrado
        $cmd = $this->pdo->prepare("SELECT id from usuarios WHERE email = :e");
        //selecionar pelo id, ta tabela usuario onde email = e
        $cmd->BindValue(":e", $email);
        //substitue a variavel email para :e
        $cmd->execute();
        if ($cmd->rowCount() > 0) {// verifica se veio algum id pra cmd se sim o email ja foi cadastrado
            return false;
        } else {//se nao veio id
            //cadastrar
            $cmd = $this->pdo->prepare("INSERT INTO usuarios (nome,email,telefone,senha) values(:n, :e, :t, :s) ");
            //depois de inserir passa as variaveis para o parametro
            $cmd->BindValue(":n", $nome);
            $cmd->BindValue(":e", $email);
            $cmd->BindValue(":t", $telefone);
            $cmd->BindValue(":s", md5($senha));
            $cmd->execute();
            return true;
        }
    }

    public function logar($email, $senha)
    {
        
        $cmd = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :e AND senha = :s");
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":s", md5($senha));
        $cmd->execute();
        if ($cmd->rowCount() > 0) {//se foi encontrado id >0 pode logar
            $dados = $cmd->fetch(PDO::FETCH_ASSOC);//transforma os parametros do banco de dados em array
         session_start();
            if ($dados['id'] == 1) {//verifica se encontrou a pessoa
               //usuario adm
                $_SESSION['id_master']  = 1;
            } else {      //usuario cadastrado
                $_SESSION['id_usuario'] = $dados['id'];
            }
            return true;//encontrou a pessoa
        } else {
            return false;// nao encontrou a pessoa
        }
    }
    public function buscarDados($id)
    {
        $cmd = $this->pdo->prepare("SELECT * FROM usuarios WHERE  id  = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();      
        $dados = $cmd->fetch();
        return $dados;
    }

    public function buscarTodosUsuarios()
    {
        $cmd = $this->pdo->prepare("SELECT usuarios.id,usuarios.nome,usuarios.email, usuarios.telefone, COUNT(comentarios.id) as 'quantidade' /*Count conta os comentarios pega comentarios e renomeia para quantidade*/
        FROM usuarios
        LEFT JOIN comentarios /*pega todos os dados contendo ou nao comentario*/
        ON usuarios.id = comentarios.fk_id_usuario /*uniao das 2 tabelas */
        GROUP BY usuarios.id ");/*agrupa as tabelas e junto com a count ordena para conta a quantidade de comentario*/
        $cmd->execute();
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

}
?>