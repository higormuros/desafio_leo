<?php

require "global.php";

if(
    isset($_REQUEST['id']) &&
    is_numeric($_REQUEST['id']) &&
    isset($_REQUEST['titulo']) && 
    isset($_REQUEST['descricao']) && 
    isset($_REQUEST['imagem']) &&
    isset($_REQUEST['link']) 
){
  
    require $diretorioModelos."curso.php";
    curso::atualizar(
        $_REQUEST['id'],
        array(
            "titulo"=>$_REQUEST['titulo'],
            "descricao"=>$_REQUEST['descricao'],
            "imagem"=>$_REQUEST['imagem'],
            "link"=>$_REQUEST['link']
        )
    );
    echo json_encode(array("Sucesso"=>"Atualizado"));
    
} else{
    echo json_encode(array("Erro"=>"Dados informados incorretamente ou ausentes."));
}

