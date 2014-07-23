<?php
/**
 * File: clientes.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 18/07/14
 * Time: 09:02
 * Project: estudo_php
 * Copyright: 2014
 */

$clientes      = new \admin\app\controller\Cliente();
$listaClientes = $clientes->listarClientes();

?>
<div class="span10 table-responsive" id="tblClientes">
    <h1>
        cadastrados</h1>
    <div class="msgRetorno"></div>
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>E-mail</th>
        </thead>
        <tbody>
        <?php foreach ($listaClientes as $cli) : ?>
            <tr>
                <td><?php echo $cli['id_cliente']; ?></td>
                <td><?php echo $cli['nome_cliente']; ?></td>
                <td><?php echo $cli['email_cliente']; ?></td>
                <td>
                    <a href="?p=clientesAlterar&id=<?php echo $cli['id_cliente']; ?>"><button class="btn btn-info">Alterar</button></a>
                    <button class="btn btn-danger" id="btnDeletarCliente" data-id="<?php echo $cli['id_cliente']; ?>" >Deletar </button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <a href="?p=clientesCadastrar"><button class="btn btn-large btn-warning" type="button">Novo usuário</button></a>
    </p>

</div>