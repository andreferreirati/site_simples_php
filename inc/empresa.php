<?php
/**
 * File: empresa.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 26/06/14
 * Time: 17:57
 * Project: estudo_php
 * Copyright: 2014
 */

$pdo = conecta();
$sql = "SELECT * FROM tbl_conteudo WHERE slug_conteudo = 'empresa'";
$stmt = $pdo->prepare( $sql );
$stmt->execute();
$home = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="page-header">
    <h1><?php echo utf8_encode( $home['titulo_conteudo'] ); ?></h1>
    <p><?php  echo utf8_encode( $home['conteudo_conteudo'] );?></p>
</div>

<?php $pdo = null; ?>