<?php
/**
 * File: clientes.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 08/07/14
 * Time: 23:21
 * Project: estudo_php
 * Copyright: 2014
 */

echo "<h2>Pagina de clientes</h2>";

$pdo       = conecta();

//Verifica se existe a tabela na BD
$sqlTabela = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'site_simples' AND table_name = 'tbl_clientes'";
$stmt      = $pdo->prepare( $sqlTabela );
$stmt->execute();
$tabela    = $stmt->rowCount();

//Caso exista a tabela
if( $tabela > 0 ){
    $sql = "SELECT * FROM tbl_clientes";
    $stmt = $pdo->prepare( $sql );
    $stmt->execute();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php  foreach( $clientes as $cli ) : ?>
            <tr>
                <td><?php echo $cli['id_cliente']; ?></td>
                <td><?php echo $cli['nome_cliente']; ?></td>
                <td><?php echo $cli['email_cliente']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php }else{
    echo '<h2 class="fixturError">Tabela Clientes não existe. favor executar o arquivo Fixture no menu Fixture</h2>';
}