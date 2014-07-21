<?php
/**
 * File: menu.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 21:45
 * Project: estudo_php
 * Copyright: 2014
 */
$menu      = new \admin\app\controller\Menu();
$listaMenu = $menu->listarMenus();

?>
<div class="span10 table-responsive" id="tblMenus">
    <h1>Menus cadastrados</h1>
    <div class="msgRetorno"></div>
    <table class="table table-striped">
        <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Href</th>
        <th>Hint</th>
        <th>Situação</th>
        </thead>
        <tbody>
        <?php foreach ($listaMenu as $menu) : ?>
            <tr>
                <td><?php echo $menu['id_menu']; ?></td>
                <td><?php echo $menu['nome_menu']; ?></td>
                <td><?php echo $menu['href_menu']; ?></td>
                <td><?php echo $menu['hint_menu']; ?></td>
                <td><?php echo ( $menu['sit_cancelado'] == 'N' ) ? 'Ativo' : 'Cancelado'; ?></td>
                <td>
                    <a href="?p=menuAlterar&id=<?php echo $menu['id_menu']; ?>"><button class="btn btn-info">Alterar</button></a>
                    <button class="btn btn-danger" id="btnDeletarMenu" data-id="<?php echo $menu['id_menu']; ?>" >Deletar </button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <a href="?p=menuCadastrar"><button class="btn btn-large btn-warning" type="button">Novo menu</button></a>
    </p>

</div>