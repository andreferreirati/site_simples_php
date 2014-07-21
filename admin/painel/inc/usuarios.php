<?php
/**
 * File: usuarios.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 00:13
 * Project: estudo_php
 * Copyright: 2014
 */

$usuarios      = new \admin\app\controller\Usuario();
$listaUsuarios = $usuarios->listarUsuarios();

?>
<div class="span10 table-responsive" id="tblClientes">
    <h1>Usuários cadastrados</h1>
    <div class="msgRetorno"></div>
    <table class="table table-striped">
        <thead>
        <th>Nome</th>
        <th>CPF</th>
        <th>Data de cadastro</th>
        <th>Situação?</th>
        <th>Ações</th>
        </thead>
        <tbody>
        <?php foreach ($listaUsuarios as $usuario) : ?>
            <tr>
                <td><?php echo $usuario['nome_usuario']; ?></td>
                <td><?php echo $usuario['cpf_usuario']; ?></td>
                <td><?php echo $usuario['dat_cadastro']; ?></td>
                <td><?php echo ( $usuario['sit_cancelado'] == 1 ) ? 'Ativo' : 'Cancelado'; ?></td>
                <td>
                    <a href="?p=usuariosAlterar&id=<?php echo $usuario['id_usuario']; ?>"><button class="btn btn-info">Alterar</button></a>
                    <button class="btn btn-danger" id="btnDeletarUsuario" data-id="<?php echo $usuario['id_usuario']; ?>" >Deletar </button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <a href="?p=usuariosCadastrar"><button class="btn btn-large btn-warning" type="button">Novo usuário</button></a>
    </p>

</div>