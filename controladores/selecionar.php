<?php

require "global.php";

if(
    isset($_REQUEST['id'])
){
    if(is_numeric($_REQUEST['id'])){
        require $diretorioModelos."curso.php";
        $resultado=curso::select($_REQUEST['id']);
        if(sizeof($resultado)>0){
            echo json_encode($resultado);
        } else{
            echo json_encode(array("Erro"=>"Nenhum registro encontrado."));
        }
    }else{
        echo json_encode(array("Erro"=>"Consulta incorreta."));
    }
} else{
    require $diretorioModelos."curso.php";
    $resultado=curso::select();
    if(isset($_REQUEST['acao'])){
        if(sizeof($resultado)>0){
            echo json_encode($resultado);
        } else{
            echo json_encode(array("Erro"=>"Nenhum registro encontrado."));
        }
    }
    
}