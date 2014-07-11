<?php
/**
 * File: fixture.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 10/07/14
 * Time: 20:52
 * Project: estudo_php
 * Copyright: 2014
 */

try {

    $pdo       = conecta();
    $scriptSql = fopen( 'sql/script.sql', 'r' );
    $contador  = 0;
    if( $scriptSql ) {
        //verifica se chegou a final do arquivo
        while ( !feof( $scriptSql ) ) {
            $stmt     = $pdo->prepare( fgets( $scriptSql ) );
            $conteudo = $stmt->execute();
            $contador++;
        }
        fclose ( $scriptSql );

        if( $conteudo ){
            echo '<h2 class="fixturSucces">O script sql foi executado com sucesso!! </h2>';
            echo '<h3 class="fixturSucces">Linhas SQL executadas: ' . $contador . '</h3>';
        }else{
            echo '<h2 class="fixturError">houve um erro na execução do script SQL</h2>';
        }

    }else {
        echo '<h2 class="fixturError">Não foi possível abrir o arquivo script.sql, <br />favor verificar o caminho na função <b>FOPEN</b></h2>';
    }
    $pdo = null;

} catch ( PDOException $e ) {
    echo '<h2 class="fixturError">' . $e->getMessage () .'</h2>';
}