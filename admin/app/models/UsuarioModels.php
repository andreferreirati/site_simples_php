<?php
/**
 * File: UsuarioModels.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 00:15
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\models;


class UsuarioModels
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = conecta();
    }

    public function procuraUsuarioPorId( $idCliente )
    {
        try{
            $pdo       = $this->conexao;
            $sql       = "SELECT * FROM tbl_usuarios WHERE id_usuario = :id";
            $stmt      = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $idCliente, \PDO::PARAM_INT );
            $stmt->execute();
            return $usuario   = $stmt->fetch(\PDO::FETCH_ASSOC);
        }catch ( \PDOException $e ){
            echo $e->getMessage();
        }
    }

    public function listarUsuarios()
    {
        try{
            $pdo = $this->conexao;
            $sql = "SELECT id_usuario, nome_usuario, cpf_usuario, dat_cadastro, sit_cancelado FROM tbl_usuarios";
            $stmt = $pdo->prepare( $sql );
            $stmt->execute();
            return $usuarios = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function cadastrarUsuario( array $dadosUsuario )
    {
        try{
            $pdo = $this->conexao;
            $sql = "INSERT INTO tbl_usuarios(nome_usuario,cpf_usuario, senha_usuario, dat_cadastro, sit_cancelado) VALUES( :nome, :cpf, :senha, :dataCadastro, :sitCancelado )";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':nome', $dadosUsuario['nome_usuario'], \PDO::PARAM_STR );
            $stmt->bindParam( ':cpf', $dadosUsuario['cpf_usuario'], \PDO::PARAM_STR );
            $stmt->bindParam( ':senha', $dadosUsuario['senha_usuario'], \PDO::PARAM_STR );
            $stmt->bindParam( ':dataCadastro', $dadosUsuario['dat_cadastro'], \PDO::PARAM_STR );
            $stmt->bindParam( ':sitCancelado', $dadosUsuario['sit_cancelado'], \PDO::PARAM_STR );
            $insert = $stmt->execute();
            return ( $insert ) ? true : false;
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function alterarUsuario( array $dadosUsuario  )
    {
        try{
            $pdo       = $this->conexao;
            $sql       = "UPDATE tbl_usuarios SET nome_usuario = :nome, cpf_usuario = :cpf, senha_usuario = :senha, sit_cancelado = :sitCancelado WHERE id_usuario = :id";
            $stmt      = $pdo->prepare( $sql );
            $stmt->bindParam( ':nome', $dadosUsuario['nome_usuario'], \PDO::PARAM_STR );
            $stmt->bindParam( ':cpf', $dadosUsuario['cpf_usuario'], \PDO::PARAM_STR );
            $stmt->bindParam( ':senha', $dadosUsuario['senha_usuario'], \PDO::PARAM_STR );
            $stmt->bindParam( ':sitCancelado', $dadosUsuario['sit_cancelado'], \PDO::PARAM_STR);
            $stmt->bindParam( ':id', $dadosUsuario['id_usuario'], \PDO::PARAM_INT );
            $update    = $stmt->execute();
            return ( $update ) ? true : false;

        }catch ( \PDOException $e ){
            echo $e->getMessage();
        }
    }

    public function deletarUsuario( $id )
    {
        try{
            $pdo  = $this->conexao;
            $sql  = "DELETE FROM tbl_usuarios WHERE id_usuario = :id";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id, \PDO::PARAM_INT );
            $delete = $stmt->execute();
            return ( $delete ) ? true : false;
        }catch ( \PDOException $e ) {
            echo $e->getMessage();
        }
    }
} 