<?php
/**
 * File: ClienteModels.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 18/07/14
 * Time: 12:05
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\models;

class ClienteModels
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = conecta();
    }

    public function procuraClientePorId( $idCliente )
    {
        try{
        $pdo       = $this->conexao;
        $sql       = "SELECT * FROM tbl_clientes WHERE id_cliente = :id";
        $stmt      = $pdo->prepare( $sql );
        $stmt->bindParam( ':id', $idCliente, \PDO::PARAM_INT );
        $stmt->execute();
        return $cliente   = $stmt->fetch(\PDO::FETCH_ASSOC);
        }catch ( \PDOException $e ){
            echo $e->getMessage();
        }
    }

    public function listarClientes()
    {
        try{
            $pdo = $this->conexao;
            $sql = "SELECT * FROM tbl_clientes";
            $stmt = $pdo->prepare( $sql );
            $stmt->execute();
            return $clientes = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function cadastrarCliente( array $dadosCliente )
    {
        try{
            $pdo = $this->conexao;
            $sql = "INSERT INTO tbl_clientes(nome_cliente,email_cliente) VALUES( :nome, :email )";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':nome', $dadosCliente['nome_cliente'], \PDO::PARAM_STR );
            $stmt->bindParam( ':email', $dadosCliente['email_cliente'], \PDO::PARAM_STR );
            $insert = $stmt->execute();
            return ( $insert ) ? true : false;
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function alterarCliente( array $dadosCliente  )
    {
        try{
            $pdo       = $this->conexao;
            $sql       = "UPDATE tbl_clientes SET nome_cliente = :nome, email_cliente = :email WHERE id_cliente = :id";
            $stmt      = $pdo->prepare( $sql );
            $stmt->bindParam( ':nome', $dadosCliente['nome_cliente'], \PDO::PARAM_STR );
            $stmt->bindParam( ':email', $dadosCliente['email_cliente'], \PDO::PARAM_STR );
            $stmt->bindParam( ':id', $dadosCliente['id_cliente'], \PDO::PARAM_INT );
            $update    = $stmt->execute();
            return ( $update ) ? true : false;

        }catch ( \PDOException $e ){
            echo $e->getMessage();
        }
    }

    public function deletarCliente( $id )
    {
        try{
            $pdo  = $this->conexao;
            $sql  = "DELETE FROM tbl_clientes WHERE id_cliente = :id";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id, \PDO::PARAM_INT );
            $delete = $stmt->execute();
            return ( $delete ) ? true : false;
        }catch ( \PDOException $e ) {
            echo $e->getMessage();
        }
    }

} 