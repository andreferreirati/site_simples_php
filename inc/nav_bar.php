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
$pdo  = conecta();
$sql  = "SELECT tm.id_menu, tm.nome_menu, tm.href_menu, tm.hint_menu, tm.sit_cancelado FROM tbl_menu tm
         WHERE  tm.sit_cancelado = 'N'";
$stmt = $pdo->prepare( $sql );
$stmt->execute();
$menu = $stmt->fetchAll( PDO::FETCH_ASSOC);

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
        </div><!--/.nav-collapse -->
    </div>
</div>