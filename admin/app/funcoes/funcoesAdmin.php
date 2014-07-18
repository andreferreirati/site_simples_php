<?php
/**
 * File: funcoesAdmin.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 18/07/14
 * Time: 09:12
 * Project: estudo_php
 * Copyright: 2014
 */


function paginaRequisitadaAdmin()
{
    $pagina    = '';
    $rota      = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $arrayRota = explode('/', $rota['path']);
    if( isset( $arrayRota[3] ) ):
        $pagina    = $arrayRota[3];
    endif;
    return $pagina;
}