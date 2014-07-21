<?php
/**
 * File: Menu.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 21:42
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\controller;

use admin\app\models\MenuModels;

class Menu extends MenuModels
{
    public function procuraMenuPorId( $id )
    {
        $dadosMenu = parent::procuraMenuPorId( $id );
        return ( $dadosMenu ) ? $dadosMenu : false;
    }

    public function cadastrarMenu( array $dadosMenu )
    {
        $cadastrarMenu = parent::cadastrarMenu( $dadosMenu );
        return ( $cadastrarMenu ) ? true : false;
    }

    public function alterarMenu( array $dadosMenu )
    {
        $alterarMenu = parent::alterarMenu( $dadosMenu );
        return ( $alterarMenu ) ? true : false;
    }

    public function deletarMenu( $id )
    {
        $deletarMenu = parent::deletarMenu( $id );
        return ( $deletarMenu ) ? true : false;
    }
} 