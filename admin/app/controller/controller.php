<?php

/**
 * File: controller.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: PHP
 * Date: 16/07/14
 * Time: 12:39
 * Project: estudo_php
 * Copyright: 2014
 */
require_once '../../../funcoes/funcoes.php';

$cpf   = filter_input( INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT );
$senha = filter_input( INPUT_POST, 'senha', FILTER_SANITIZE_STRING );
$acao  = filter_input( INPUT_POST, 'acao', FILTER_SANITIZE_STRING );

if( valida_cpf( $cpf ) ){

    switch( $acao ) :
        case 'login':
            echo 'aqui vai minha logica';
            break;


    endswitch;

}else{
    echo 'cpf_invalido';
}
