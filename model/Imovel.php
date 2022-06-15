<?php

require_once 'Banco.php';
require_once 'Conexao.php';

class Imovel extends Banco{

    private $id;
    private $descricao;
    private $foto;
    private $tipo;
    private $valor;

    //métodos de acesso

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getTipo(){
        if($this->tipo == 'A'){
            $res = "Apartamento";
        }else{
            $res = "Casa";
        }
        return $res;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }


    public function save(){
        $result = false;

        $conexao = new Conexao();

        $query = "insert into imovel (descricao, tipo, valor, foto) values (:descricao, :tipo, :valor, :foto)";

        if($conn = $conexao->getConection()){
            $stmt = $conn->prepare($query);
            if($stmt->execute(array(':descricao'=>$this->descricao, ':tipo' => $this->tipo, ':valor' => $this->valor, ':foto' => $this->foto))){
                $result = $stmt->rowCount();
            }
        }

        return $result;
    }

    public function edit(){
        
    }

    public function find($id){
        
    }

    public function remove($id){
        
    }

    public function count(){
        
    }

    public function listAll()
    {
        $result = false;
        $conexao = new Conexao();
        $conn = $conexao->getConection();

        $query = "select * from imovel";

        $stmt = $conn->prepare($query);

        $result = array();

        if($stmt->execute()){
            while ($rs = $stmt->fetchObject(Imovel::class)){
                $result[] = $rs;
            }
        }

        return $result;
    }
  
}

?>