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

namespace admin\app\controller;

require_once '../../../config.php';

$cpf   = filter_input( INPUT_POST, 'cpf', FILTER_SANITIZE_STRING );
$senha = filter_input( INPUT_POST, 'senha', FILTER_SANITIZE_STRING );
$acao  = filter_input( INPUT_POST, 'acao', FILTER_SANITIZE_STRING );
$conn  = conecta();


switch( $acao ) :
    case 'login':

        if( valida_cpf( $cpf ) ){
            $dadasUsuario = new Login();
            $resultado    =  $dadasUsuario->logarController($cpf, $senha, $conn);
            if( $resultado ) {
                echo 'logadoComSucesso';
            }
        }else{
            echo 'cpf_invalido';
        }
    break;

    case 'alterarCliente':
        $idCliente    = filter_input( INPUT_POST, 'idCliente', FILTER_SANITIZE_NUMBER_INT );
        $nomeCliente  = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
        $emailCliente = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_STRING );
        $dadosCliente = array(
            'id_cliente'   => $idCliente,
            'nome_cliente' => $nomeCliente,
            'email_cliente'=> $emailCliente
        );
        $cliente       = new Cliente();
        $updateCliente = $cliente->alterarCliente( $dadosCliente );
        if( $updateCliente ) {
            echo 'clienteAtualizadoSucesso';
        }else {
            echo 'erroAtualizarCliente';
        }
        break;

    case 'deletarCliente':
        $idCliente = filter_input( INPUT_POST, 'idCliente', FILTER_SANITIZE_NUMBER_INT );
        $cliente   = new Cliente();
        $deletarCliente = $cliente->deletarCliente( $idCliente );
        if( $deletarCliente ) {
            echo 'clienteDeletadoSucesso';
        }else {
            echo 'erroDeletarCliente';
        }
        break;

    case 'CadastrarCliente':
        $nomeCliente  = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
        $emailCliente = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_STRING );
        $dadosCliente = array(
            'nome_cliente' => $nomeCliente,
            'email_cliente'=> $emailCliente
        );
        $cliente = new Cliente();
        $cadastrarCliente = $cliente->cadastrarCliente( $dadosCliente );
        if( $cadastrarCliente ) {
            echo 'clienteCadastradoSucesso';
        }else {
            echo 'erroCadastrarCliente';
        }
        break;

endswitch;


