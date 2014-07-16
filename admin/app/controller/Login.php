<?php
/**
 * File:   controller/Login.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 16/07/14
 * Time: 16:52
 * Project: estudo_php
 * Copyright: 2014
 */


namespace admin\app\controller;


class Login extends \admin\app\models\Login
{
    public function __construct()
    {

    }

    public function logarController( $cpf, $senha, $conn )
    {
        $dadosUsuario = parent::logarModels( $cpf, $senha, $conn );
        echo '<pre>'.__FILE__.': '.__LINE__.'<hr>';print_r($dadosUsuario);echo'<hr></pre>';
    }

    public function imprime()
    {
        echo 'Estou no controllador Login';
    }
} 