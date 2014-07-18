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

    public static function verificaUrlAdmin( $pagina )
    {
        if( isset( $pagina ) ) {

            if( $pagina == '' ) {
                require_once( 'inc/home.php' );
            }
            if( file_exists( 'inc/' .$pagina.'.php' ) ) {
                require_once( 'inc/' .$pagina.'.php' );
            }elseif( $pagina <> '' ){
                require_once( 'inc/error404.php' );
            }
        } else {
            require_once( 'inc/error404.php' );
        }
    }
} 