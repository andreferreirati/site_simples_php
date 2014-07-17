<?php
/**
 * File:   models/LoginModels.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 16/07/14
 * Time: 17:09
 * Project: estudo_php
 * Copyright: 2014
 */
namespace admin\app\models;


class LoginModels
{
    /**
     * Função para consultar usuario
     * @param $cpf
     * @param $senha
     * @param $conn
     * @return mixed
     */
    public function logarModels( $cpf, $senha, $conn )
    {
        try{
            $pdo = $conn;
            $stmt = $pdo->prepare( "SELECT id_usuario, nome_usuario, cpf_usuario, dat_cadastro, sit_cancelado
                                    FROM tbl_usuarios
                                    WHERE cpf_usuario = :cpf
                                    AND senha_usuario = :senha" );
            $stmt->bindParam( ':cpf', $cpf, \PDO::PARAM_STR );
            $stmt->bindParam( ':senha', $senha, \PDO::PARAM_STR );
            $stmt->execute();
            return $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e){
            echo $e->getMessage();
        }

    }
} 