<?php

require "conexao.php";

class curso{
    
    private $titulo;
    private $descricao;
    private $imagem;
    private $link;

    public function __construct($titulo,$descricao,$imagem,$link){
        $this->titulo=$titulo;
        $this->descricao=$descricao;
        $this->imagem=$imagem;
        $this->link=$link;
    }

    public function inserir(){
        $query="
		INSERT INTO 
		cursos
		(titulo, descricao, imagem, link) 
		VALUES ( :titulo , :descricao , :imagem, :link);";
        $conexao=new conexao();
		$stmt = $conexao->conectar()->prepare($query);
		$stmt->bindValue(':titulo',$this->titulo);
		$stmt->bindValue(':descricao',$this->descricao);
		$stmt->bindValue(':imagem',$this->imagem);
        $stmt->bindValue(':link',$this->link);
		$stmt->execute();
    }

    public function select($id="a"){
        $query="select * from cursos";
        $conexao=new conexao();
        if(is_numeric($id)){
            $query.=" where idcurso = :id;";
            $stmt = $conexao->conectar()->prepare($query);
            $stmt->bindValue(':id',$id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $stmt = $conexao->conectar()->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function atualizar($id,$valores){
        $query="UPDATE cursos
        SET titulo= :titulo , descricao= :descricao , imagem= :imagem , link= :link
        WHERE idcurso= :id ;";
        $conexao=new conexao();
        $stmt = $conexao->conectar()->prepare($query);
        $stmt->bindValue(':titulo',$valores["titulo"]);
        $stmt->bindValue(':descricao',$valores["descricao"]);
        $stmt->bindValue(':imagem',$valores["imagem"]);
        $stmt->bindValue(':link',$valores["link"]);
        $stmt->bindValue(':id',$id);
        $stmt->execute();
    }

    public function deletar($id){
        $query="DELETE FROM cursos WHERE idcurso= :id ;";
        $conexao=new conexao();
		$stmt = $conexao->conectar()->prepare($query);
		$stmt->bindValue(':id',$id);
		$stmt->execute();
    }

}