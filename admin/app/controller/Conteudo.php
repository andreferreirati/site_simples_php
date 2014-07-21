<?php
/**
 * File: Conteudo.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 15:51
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\controller;


use admin\app\models\ConteudoModels;

class Conteudo extends ConteudoModels
{
    public function procuraConteudoPorId( $idConteudo )
    {
        $dadosConteudo = parent::procuraConteudoPorId( $idConteudo );
        return ( $dadosConteudo ) ? $dadosConteudo : false;
    }

    public function cadastrarConteudo( array $dadosConteudo )
    {
        $cadastrarConteudo = parent::cadastrarConteudo( $dadosConteudo );
        return ( $cadastrarConteudo ) ? true : false;
    }

    public function alterarConteudo( array $dadosConteudo )
    {
        $alterarConteudo = parent::alterarConteudo( $dadosConteudo );
        return ( $alterarConteudo ) ? true : false;
    }

    public function deletarConteudo( $id )
    {
        $deletarConteudo = parent::deletarConteudo( $id );
        return ( $deletarConteudo ) ? true : false;
    }

    public function listarConteudo()
    {
        $listarConteudo = parent::listarConteudo();
        return ( $listarConteudo ) ? $listarConteudo : false;
    }
} 