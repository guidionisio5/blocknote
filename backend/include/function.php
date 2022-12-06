<?php

    function validaCampoVazio($campo, $nomedocampo){
        if($campo == ''){
            $retorno = array(
                'retorno'=>'erro',
                'mensagem'=>'Preencha o campo '.$nomedocampo.'!');
                $json = json_encode($retorno, JSON_UNESCAPED_UNICODE);

            echo $json;
            exit();
        }
    }
?>