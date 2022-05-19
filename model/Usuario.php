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
        return $this->permissao;
    }

    public function setPermissao($permissao){
        $this->permissao = $permissao;
    }

    public function getId(){
        return $this->id;
    }

    public function save(){
        
    }

    public function remove($id){
        
    }

    public function find($id){
        
    }

    public function count(){
        
    }

    public function listAll(){
        
    }


}


?>