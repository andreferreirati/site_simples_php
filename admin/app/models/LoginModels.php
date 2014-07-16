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
    public function logarModels( $cpf, $senha, $conn )
    {
        try{
            $pdo = $conn;
            $stmt = $pdo->prepare( "SELECT * FROM tbl_usuarios WHERE cpf_usuario = :cpf" );
            $stmt->bindParam( ':cpf', $cpf, \PDO::PARAM_STR );
            $stmt->execute();
            return $dados = $stmt->fetch(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e){
            echo $e->getMessage();
        }

    }
} 