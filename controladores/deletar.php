<?php

require "global.php";

if(
    isset($_REQUEST['id']) &&
    is_numeric($_REQUEST['id'])
){
    require $diretorioModelos."curso.php";
    curso::deletar($_REQUEST['id']);
    echo json_encode(array("Sucesso"=>"Deletado"));
} else{
    echo json_encode(array("Erro"=>"Dados informados incorretamente ou ausentes."));
}