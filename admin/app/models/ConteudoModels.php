<?php
/**
 * File: ConteudoModels.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 15:41
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\models;


class ConteudoModels
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = conecta();
    }

    public function procuraConteudoPorId( $idConteudo )
    {
        try{
            $pdo       = $this->conexao;
            $sql       = "SELECT * FROM tbl_conteudo WHERE id = :id";
            $stmt      = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $idConteudo, \PDO::PARAM_INT );
            $stmt->execute();
            return $conteudo   = $stmt->fetch(\PDO::FETCH_ASSOC);
        }catch ( \PDOException $e ){
            echo $e->getMessage();
        }
    }

    public function listarConteudo()
    {
        try{
            $pdo = $this->conexao;
            $sql = "SELECT * FROM tbl_conteudo";
            $stmt = $pdo->prepare( $sql );
            $stmt->execute();
            return $conteudo = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function cadastrarConteudo( array $dadosConteudo )
    {
        try{
            $pdo = $this->conexao;
            $sql = "INSERT INTO tbl_conteudo(titulo_conteudo,conteudo_conteudo, slug_conteudo) VALUES( :tituloCont, :conteudoCont, :slugCont )";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':tituloCont', $dadosConteudo['titulo_conteudo'], \PDO::PARAM_STR );
            $stmt->bindParam( ':conteudoCont', $dadosConteudo['conteudo_conteudo'], \PDO::PARAM_STR );
            $stmt->bindParam( ':slugCont', $dadosConteudo['slug_conteudo'], \PDO::PARAM_STR );
            $insert = $stmt->execute();
            return ( $insert ) ? true : false;
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function alterarConteudo( array $dadosConteudo  )
    {
        try{
            $pdo       = $this->conexao;
            $sql       = "UPDATE tbl_conteudo SET titulo_conteudo = :tituloCont, conteudo_conteudo = :conteudoCont, slug_conteudo = :slugCont WHERE id = :id";
            $stmt      = $pdo->prepare( $sql );
            $stmt->bindParam( ':tituloCont', $dadosConteudo['titulo_conteudo'], \PDO::PARAM_STR );
            $stmt->bindParam( ':conteudoCont', $dadosConteudo['conteudo_conteudo'], \PDO::PARAM_STR );
            $stmt->bindParam( ':slugCont', $dadosConteudo['slug_conteudo'], \PDO::PARAM_STR );
            $stmt->bindParam( ':id', $dadosConteudo['id'], \PDO::PARAM_INT );
            $update    = $stmt->execute();
            return ( $update ) ? true : false;

        }catch ( \PDOException $e ){
            echo $e->getMessage();
        }
    }

    public function deletarConteudo( $id )
    {
        try{
            $pdo  = $this->conexao;
            $sql  = "DELETE FROM tbl_conteudo WHERE id = :id";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id, \PDO::PARAM_INT );
            $delete = $stmt->execute();
            return ( $delete ) ? true : false;
        }catch ( \PDOException $e ) {
            echo $e->getMessage();
        }
    }
} 