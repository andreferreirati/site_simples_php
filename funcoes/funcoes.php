<?php
/**
 * File: funcoes.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 05/07/14
 * Time: 17:50
 * Project: estudo_php
 * Copyright: 2014
 */

/**
 * Função que extrai o nome da pagina solicitada
 * @return mixed
 */
function paginaRequisitada()
{
    $rota      = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $arrayRota = explode('/', $rota['path']);

    $pagina    = $arrayRota[1];

    return $pagina;
}

function limitarCaracter( $frase, $limite )
{
    $tamanho = strlen( $frase ); //tamanho da frase

    if( $tamanho <= $limite ) {
        $novaFrase = $frase;
    }else {
        $novaFrase    = trim( substr( $frase, 0, $limite ) ) . '...';
    }
    return utf8_encode( $novaFrase );
}

function valida_cpf( $cpf )
{
    $cpf       = str_pad(str_replace(array('.','-','/'),'',$cpf),11,'0',STR_PAD_LEFT);
    $invalidos = array( '00000000000', '11111111111', '22222222222',
                        '33333333333', '44444444444', '55555555555',
                        '66666666666', '77777777777', '88888888888', '99999999999' );

    if(strlen($cpf) != 11 || in_array($cpf,$invalidos)){
        return false;
    }else{   // Calcula os números para verificar se o CPF é verdadeiro
        for($t = 9; $t < 11; $t++){
            for($d = 0, $c = 0; $c < $t; $c++){
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if($cpf{$c} != $d){
                return false;
            }
        }
        return true;
    }
}