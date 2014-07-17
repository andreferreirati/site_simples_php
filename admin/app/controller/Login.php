<?php
/**
 * File:   controller/LoginModels.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 16/07/14
 * Time: 16:52
 * Project: estudo_php
 * Copyright: 2014
 */


namespace admin\app\controller;

use admin\app\models\LoginModels;

class Login extends LoginModels
{

    /**
     * Função logarController
     * Ela usa o bcrypt para geração da senha,
     * @param $cpf
     * @param $senha
     * @param $conn
     * @return bool
     */
    public function logarController( $cpf, $senha, $conn )
    {

        $options = [
            'salt' => 'Esta senha foi gerada pelo sistema Sites de noticias internamente',
            'cost' => 10
        ];
        $senha  = password_hash( $senha, PASSWORD_DEFAULT, $options );

        $dadosUsuario = parent::logarModels( $cpf, $senha, $conn );

        if( $dadosUsuario ) {

            if( $dadosUsuario['sit_cancelado'] == '1' ) {
                $_SESSION['usuario_logado'] = true;
                $_SESSION['nome_usuario']   = $dadosUsuario['nome_usuario'];
                $_SESSION['cpf_usuario']    = $dadosUsuario['cpf_usuario'];
                return true;
            } else {
                echo 'naohabilitado';
            }//endif

        } else{
            echo 'usuario_ou_senha_invalido';
        }//end if
    }

    public function imprime()
    {
        echo 'Estou no controllador Login !!000!';
    }
} 