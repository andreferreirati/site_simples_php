<?php
/**
 * File: MenuModels.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 21:36
 * Project: estudo_php
 * Copyright: 2014
 */

namespace admin\app\models;


class MenuModels
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = conecta();
    }

    public function procuraMenuPorId( $idMenu )
    {
        try{
            $pdo       = $this->conexao;
            $sql       = "SELECT * FROM tbl_menu WHERE id_menu = :id";
            $stmt      = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $idMenu, \PDO::PARAM_INT );
            $stmt->execute();
            return $menu   = $stmt->fetch(\PDO::FETCH_ASSOC);
        }catch ( \PDOException $e ){
            echo $e->getMessage();
        }
    }

    public function listarMenus()
    {
        try{
            $pdo = $this->conexao;
            $sql = "SELECT * FROM tbl_menu";
            $stmt = $pdo->prepare( $sql );
            $stmt->execute();
            return $menus = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function cadastrarMenu( array $dadosMenu )
    {
        try{
            $pdo = $this->conexao;
            $sql = "INSERT INTO tbl_menu(nome_menu,href_menu, hint_menu, sit_cancelado) VALUES( :nome, :href, :hint, :sitCancelado )";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':nome',  $dadosMenu['nome_menu'], \PDO::PARAM_STR );
            $stmt->bindParam( ':href', $dadosMenu['href_menu'], \PDO::PARAM_STR );
            $stmt->bindParam( ':hint', $dadosMenu['hint_menu'], \PDO::PARAM_STR );
            $stmt->bindParam( ':sitCancelado', $dadosMenu['sit_cancelado'], \PDO::PARAM_STR );
            $insert = $stmt->execute();
            return ( $insert ) ? true : false;
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function alterarMenu( array $dadosMenu  )
    {
        try{
            $pdo       = $this->conexao;
            $sql       = "UPDATE tbl_menu SET nome_menu = :nome, href_menu = :href, hint_menu = :hint, sit_cancelado = :sitCancelado  WHERE id_menu = :idMenu";
            $stmt      = $pdo->prepare( $sql );
            $stmt->bindParam( ':nome',  $dadosMenu['nome_menu'], \PDO::PARAM_STR );
            $stmt->bindParam( ':href', $dadosMenu['href_menu'], \PDO::PARAM_STR);
            $stmt->bindParam( ':hint', $dadosMenu['hint_menu'], \PDO::PARAM_STR );
            $stmt->bindParam( ':sitCancelado', $dadosMenu['sit_cancelado'], \PDO::PARAM_STR );
            $stmt->bindParam( ':idMenu', $dadosMenu['id_menu'], \PDO::PARAM_INT );
            $update    = $stmt->execute();
            return ( $update ) ? true : false;

        }catch ( \PDOException $e ){
            echo $e->getMessage();
        }
    }

    public function deletarMenu( $id )
    {
        try{
            $pdo  = $this->conexao;
            $sql  = "DELETE FROM tbl_menu WHERE id_menu = :id";
            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':id', $id, \PDO::PARAM_INT );
            $delete = $stmt->execute();
            return ( $delete ) ? true : false;
        }catch ( \PDOException $e ) {
            echo $e->getMessage();
        }
    }
} 