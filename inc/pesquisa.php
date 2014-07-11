<?php
/**
 * File: pesquisa.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 11/07/14
 * Time: 00:13
 * Project: estudo_php
 * Copyright: 2014.
 */

echo '<div id="containerPesquisa">';
$stringPesquisa = filter_input(INPUT_POST,'txtPesquisa', FILTER_SANITIZE_STRING);

if( isset($stringPesquisa) AND $stringPesquisa <> null ) {

    $pdo = conecta();
    $sql = "SELECT * FROM tbl_conteudo WHERE conteudo_conteudo LIKE '%$stringPesquisa%'";
    $stmt = $pdo->prepare( $sql );
    $stmt->execute();
    $noticiaEncontrada = $stmt->fetchAll( PDO::FETCH_OBJ );
      echo '<ul>';
      foreach( $noticiaEncontrada as $noticia) :
        echo '<li><b>' .utf8_encode( $noticia->titulo_conteudo ).  '</b><br />';
        echo limitarCaracter( $noticia->conteudo_conteudo, 500 ). '<a href="/'.$noticia->slug_conteudo .'">Leia mais</a>  </li>';
      endforeach;
      echo '</ul>';
}else{
    echo '<p class="erroPesquisa">Favor informar a palavra a ser pesquisada</p>';
}

echo '</div>';