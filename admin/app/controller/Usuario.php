<?php
/**
 * File: Usuario.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 00:15
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\controller;


use admin\app\models\UsuarioModels;

class Usuario extends UsuarioModels
{
    public function procuraUsuarioPorId( $idUsuario )
    {
        $dadosUsuario = parent::procuraUsuarioPorId( $idUsuario );
        return ( $dadosUsuario ) ? $dadosUsuario : false;
    }

    public function procuraUsuarioPorCpf( $cpfUsuario )
    {
        $dadosUsuario = parent::procuraUsuarioPorCpf( $cpfUsuario );
        return ( $dadosUsuario ) ? $dadosUsuario : false;
    }

    public function cadastrarUsuario( array $dadosUsuario )
    {
        $dadosUsuario['senha_usuario'] = $this->converteSenha( $dadosUsuario['senha_usuario'] );
        $cadastrarUsuario = parent::cadastrarUsuario( $dadosUsuario );
        return ( $cadastrarUsuario ) ? true : false;
    }

    public function alterarUsuario( array $dadosUsuario )
    {
        $dadosUsuario['senha_usuario'] = $this->converteSenha( $dadosUsuario['senha_usuario'] );
        $alterarUsuario = parent::alterarUsuario( $dadosUsuario );
        return ( $alterarUsuario ) ? true : false;
    }

    public function deletarUsuario( $id )
    {
        $deletarUsuario = parent::deletarUsuario( $id );
        return ( $deletarUsuario ) ? true : false;
    }

    public function listarUsuarios()
    {
        $listarusuario = parent::listarUsuarios();
        return ( $listarusuario ) ? $listarusuario : false;
    }

    private function converteSenha( $senha )
    {
        $options = [
            'salt' => 'Esta senha foi gerada pelo sistema Sites de noticias internamente',
            'cost' => 10
        ];
        $senhaConvertida   = password_hash( $senha, PASSWORD_DEFAULT, $options );
        return $senhaConvertida;
    }
} 