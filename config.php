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

session_start();

$root     = $_SERVER['DOCUMENT_ROOT'];
$strHttp  = ( isset( $_SERVER['HTTPS'] ) ) ? "https://" : "http://";

const APP_HOST_DEV      = 'site_simples.localhost' ;
const APP_HOST_DEV_IP   = '127.0.0.1';
const APP_HOST_PRODUCAO = 'url_da_pagina_em_producao';

//Verifica qual ambiente esta sendo executada a aplicação
//para poder abrir o sistema corretamente
$strHostApp = '';

if( isset( $_SERVER['SERVER_NAME'] ) )  {
    switch( $_SERVER['SERVER_NAME'] )
    {
        case APP_HOST_DEV:
            $base_url = $strHttp . APP_HOST_DEV;
            break;
        case APP_HOST_DEV_IP:
            $base_url = $strHttp . APP_HOST_DEV_IP . ':' .$_SERVER['SERVER_PORT'];
            break;
        case APP_HOST_PRODUCAO:
            $base_url = $strHttp . APP_HOST_PRODUCAO .DIRECTORY_SEPARATOR . 'site_simples';
            break;
    }
}


require_once( 'autoload.php' );
require_once( 'funcoes/conexao.php' );
require_once( 'funcoes/funcoes.php' );
require_once( 'admin/app/funcoes/funcoesAdmin.php' );