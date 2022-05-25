<?php

require_once 'Banco.php';
require_once '../Conexao.php';

class Usuario extends Banco{

    private $id;
    private $login;
    private $senha;
    private $permissao;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getPermissao(){

        if($this->permissao == 'A'){
            $res = "Administrador";
        }else{
            $res = "Comum";
        }
        return $res;
    }

    public function setPermissao($permissao){
        $this->permissao = $permissao;
    }

    public function save(){
        $result = false;

        $conexao = new Conexao();

        $query = "insert into usuario (login, senha, permissao) values (:login, :senha, :permissao)";

        if($conn = $conexao->getConection()){
            $stmt = $conn->prepare($query);
            if($stmt->execute(array(':login'=>$this->login, ':senha' => $this->senha, ':permissao' => $this->permissao))){
                $result = $stmt->rowCount();
            }
        }

        return $result;
    }

    public function remove($id){

    }

    public function find($id){

    }

    public function count(){

    }

    public function listAll(){
        $result = false;
        $conexao = new Conexao();
        $conn = $conexao->getConection();

        $query = "select * from usuario";

        $stmt = $conn->prepare($query);

        $result = array();

        if($stmt->execute()){
            while ($rs = $stmt->fetchObject(Usuario::class)){
                $result[] = $rs;
            }
        }

        return $result;
    }


}


?>