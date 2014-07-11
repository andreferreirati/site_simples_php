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