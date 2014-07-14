<?php
/**
 * File: nav_bar.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 26/06/14
 * Time: 16:40
 * Project: estudo_php
 * Copyright: 2014
 */

try {

    $pdo = conecta();

    $scriptSql = fopen( 'sql/script2.sql', 'r' );
    $contador  = 0;
    if( $scriptSql ) {
        //verifica se chegou a final do arquivo
        while ( !feof( $scriptSql ) ) {
            $stmt     = $pdo->prepare( fgets( $scriptSql ) );
            $conteudo = $stmt->execute();
            $contador++;
        }
        fclose ( $scriptSql );

    }else {
        echo '<h2 class="fixturError">Não foi possível abrir o arquivo script2.sql, <br />favor verificar o caminho na função <b>FOPEN</b></h2>';
    }

    //$pdo  = conecta();
    $sql  = "SELECT tm.id_menu, tm.nome_menu, tm.href_menu, tm.hint_menu, tm.sit_cancelado FROM tbl_menu tm
             WHERE  tm.sit_cancelado = 'N' LIMIT 6";
    $stmt = $pdo->prepare( $sql );

    $stmt->execute();
    $menu = $stmt->fetchAll( PDO::FETCH_ASSOC);

    $pdo = null;

} catch ( PDOException $e ) {
    echo '<h2 class="fixturError">' . $e->getMessage () .'</h2>';
}


?>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Site Simples em php</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach( $menu as $m ) : ?>
                    <li><a href="<?php echo $m['href_menu'] ?>" title="<?php echo utf8_encode( $m['hint_menu'] );?>"><?php echo utf8_encode( $m['nome_menu'] ); ?></a></li>
                <?php endforeach; ?>

            </ul>
            <form class="navbar-form navbar-right" method="post" action="pesquisa">
                <input type="text" placeholder="Pesquisar" class="form-control" id="txtPesquisa" name="txtPesquisa">
                <input type="submit" value="Pesquisar.."/>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</div>