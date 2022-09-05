<?php

require "global.php";

if(
    isset($_REQUEST['titulo']) && 
    isset($_REQUEST['descricao']) && 
    isset($_REQUEST['imagem']) &&
    isset($_REQUEST['link']) 
){
    require $diretorioModelos."curso.php";
    $usuario=new curso(
        $_REQUEST['titulo'],
        $_REQUEST['descricao'],
        $_REQUEST['imagem'],
        $_REQUEST['link']
    );
    $usuario->inserir();
    echo json_encode(array("Sucesso"=>"Inserido"));
} else{
    echo json_encode(array("Erro"=>"Dados informados incorretamente ou ausentes."));
}

