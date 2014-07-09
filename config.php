<?php
/**
 * File: config.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 05/07/14
 * Time: 17:57
 * Project: estudo_php
 * Copyright: 2014
 */

$root     = $_SERVER['DOCUMENT_ROOT'];
$strHttp  = ( isset( $_SERVER['HTTPS'] ) ) ? "https://" : "http://";

const APP_HOST_DEV    = 'site_simples.localhost' ;
const APP_HOST_DEV_IP = '127.0.0.1';

//Verifica qual ambiente esta sendo executada a aplicação
//para poder abrir o sistema corretamente
$strHostApp = '';

switch( $_SERVER['SERVER_NAME'] )
{
    case APP_HOST_DEV:
        $base_url = $strHttp . APP_HOST_DEV;
        break;
    case APP_HOST_DEV_IP:
        $base_url = $strHttp . APP_HOST_DEV_IP . ':' .$_SERVER['SERVER_PORT'];
        break;
}

require_once( 'autoload.php' );
require_once( 'funcoes/funcoes.php' );