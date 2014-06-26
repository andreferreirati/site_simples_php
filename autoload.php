<?php
/**
 * File: autoload.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 26/06/14
 * Time: 17:02
 * Project: estudo_php
 * Copyright: 2014
 */
function autoload( $className )
{
    $className = ltrim( $className, '\\' );
    $fileName  = '';

    if ( $lastNsPos = strrpos( $className, '\\' ) ) {
         $namespace = substr( $className, 0, $lastNsPos );
         $className = substr( $className, $lastNsPos + 1 );
         $fileName  = str_replace( '\\', DIRECTORY_SEPARATOR, $namespace ) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace( '_', DIRECTORY_SEPARATOR, $className ) . '.php';
    //echo '<pre>'.__FILE__.': '.__LINE__.'<hr>';print_r($fileName);echo'<hr></pre>';
    require $fileName;
}

spl_autoload_register('autoload');