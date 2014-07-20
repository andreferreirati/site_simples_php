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
    $rota      = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    return $rota['query'];
}