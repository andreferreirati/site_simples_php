<?php
/**
 * File: conexao.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 08/07/14
 * Time: 22:48
 * Project: estudo_php
 * Copyright: 2014
 */

const HOST     = 'localhost';
const USER     = 'root';
const PASSWORD = 'root';
const DB       = 'site_simples';

function conecta()
{
    $dns = "mysql:host=" . HOST . ";dbname=" . DB;
    try {
        $conn = new PDO( $dns, USER, PASSWORD );
        //setando informações de erro
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $conn;
    }
    catch( \PDOException $e ) {
        die( 'Erro código: ' . $e->getCode() . ": " .$e->getMessage() );
    }
}