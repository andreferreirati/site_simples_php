<?php
/**
 * File: fixtureUsuario.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 22:58
 * Project: estudo_php
 * Copyright: 2014
 */

function executaSQL( $sql, array $insertDadosUsuario = null )
{
    try{
        $pdo  = conecta();
        if( count($insertDadosUsuario) > 0 ){
            $options = [
                'salt' => 'Esta senha foi gerada pelo sistema Sites de noticias internamente',
                'cost' => 10
            ];
            $senhaTemp = password_hash( $insertDadosUsuario['senhaTemp'], PASSWORD_DEFAULT, $options );

            $stmt = $pdo->prepare( $sql );
            $stmt->bindParam( ':nome', $insertDadosUsuario['nome'], \PDO::PARAM_STR );
            $stmt->bindParam( ':cpf', $insertDadosUsuario['cpf'], \PDO::PARAM_STR );
            $stmt->bindParam( ':senha', $senhaTemp, \PDO::PARAM_STR );
            $stmt->bindParam( ':datCad', $insertDadosUsuario['data'], \PDO::PARAM_STR );
            $stmt->bindParam( ':sitCancelado', $insertDadosUsuario['sitCancaldo'], \PDO::PARAM_STR );
            $insert = $stmt->execute();
            return ( $insert ) ? true : false;
        }else{
            $stmt = $pdo->prepare( $sql );
            $stmt->execute();
            $res  = $stmt->fetchAll( PDO::FETCH_ASSOC );
            return $res;
        }
    }catch ( \PDOException $e ){

    }
}

$bd     = "site_simples";
$tabela = "tbl_menu";
$sql1   = "SELECT table_name FROM information_schema.tables WHERE table_schema = '{$bd}' AND table_name = '{$tabela}'";
$verificatabela = executaSQL( $sql1, null );


if( count( $verificatabela ) == 1 ) {

    $dataAtual = date( 'Y-m-d H:i:s' );
    $senhaTemp = '123';
    $sql4      = "INSERT INTO tbl_usuarios(nome_usuario, cpf_usuario, senha_usuario, dat_cadastro, sit_cancelado) VALUES (:nome,:cpf,:senha,:datCad,:sitCancelado)";
    $dadosUsuario = array(
        'nome'        => 'Usuario de Teste Fixture ',
        'cpf'         => '47561650523',
        'senhaTemp'   => $senhaTemp,
        'data'        => $dataAtual,
        'sitCancaldo' => '2'
    );
    $resultado = executaSQL( $sql4, $dadosUsuario );
    echo ( $resultado ) ? '<h2>Arquivo fixtureUsuario.php executado com sucesso</h2>' : '<h2>Erro ao tentar executar a fixtureUsuario.php </h2>';

}else {
    echo 'Tabela:  ' . $tabela . ' não existe na base de dados: ' . $bd;
}
?>