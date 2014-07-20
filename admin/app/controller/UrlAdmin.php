<?php
/**
 * File: UrlAdmin.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 18/07/14
 * Time: 09:09
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\controller;


class UrlAdmin
{

    public static function pegaPaginaExistente( $pagina ){
        if( isset($pagina) ){
            if( file_exists( 'inc/'.$pagina.'.php' ) ){
                require 'inc/'.$pagina.'.php';
            }else{
                require 'inc/error404.php';
            }
        }else{
            require_once ( 'inc/error404.php' );
        }//end if
    }
} 