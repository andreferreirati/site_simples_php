<?php
/**
 * File: Url.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 26/06/14
 * Time: 16:51
 * Project: estudo_php
 * Copyright: 2014
 */

namespace classes;


class Url
{

    /** /
    public static function verificaUrl( $pagina )
    {
        if( isset( $pagina ) ) {
            if( file_exists( 'inc/' .$pagina.'.php' ) ) {
               require_once( 'inc/' .$pagina.'.php' );
            }else {
                require_once( 'inc/error404.php' );
            }
        } else {
            require_once( 'inc/error404.php' );
        }
    }
    /**/

    public static function verificaUrl( $pagina )
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