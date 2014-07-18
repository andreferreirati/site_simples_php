<?php
/**
 * File: Cliente.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 18/07/14
 * Time: 12:10
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\controller;

use admin\app\models\ClienteModels;

class Cliente extends ClienteModels
{

    public function procuraClientePorId( $id )
    {
        $dadosCliente = parent::procuraClientePorId( $id );
        return ( $dadosCliente ) ? $dadosCliente : false;
    }

    public function cadastrarCliente( array $dadosCliente )
    {
        $cadastrarCliente = parent::cadastrarCliente( $dadosCliente );
        return ( $cadastrarCliente ) ? true : false;
    }

    public function alterarCliente( array $dadosCliente )
    {
        $alterarCliente = parent::alterarCliente( $dadosCliente );
        return ( $alterarCliente ) ? true : false;
    }

    public function deletarCliente( $id )
    {
        $deletarCliente = parent::deletarCliente( $id );
        return ( $deletarCliente ) ? true : false;
    }
} 