<?php
/**
 * File:   models/Login.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 16/07/14
 * Time: 17:09
 * Project: estudo_php
 * Copyright: 2014
 */
namespace admin\app\models;


class Login
{
    private $cpf;
    private $senha;

    public function logarModels( $cpf, $senha, $conn )
    {
        echo '<pre>'.__FILE__.': '.__LINE__.'<hr>';print_r($cpf);echo'<hr></pre>';
    }
} 