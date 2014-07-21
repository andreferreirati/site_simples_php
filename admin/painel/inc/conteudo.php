<?php
/**
 * File: conteudo.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 15:59
 * Project: estudo_php
 * Copyright: 2014
 */

$conteudoPagina = new \admin\app\controller\Conteudo();
$listarConteudo = $conteudoPagina->listarConteudo();

?>
<div class="col-sm-11 table-responsive" id="tblClientes">
    <h1>Clientes cadastrados</h1>
    <div class="msgRetorno"></div>
    <table class="table table-striped">
        <thead>
        <th>Titulo</th>
        <th>Slug</th>
        <th>Conteudo</th>
        <th>Ações</th>
        </thead>
        <tbody>
        <?php foreach ($listarConteudo as $lisContent) : ?>
            <tr>
                <td class="col-sm-2"><?php echo $lisContent['titulo_conteudo']; ?></td>
                <td class="col-sm-1"><?php echo $lisContent['slug_conteudo']; ?></td>
                <td class="col-sm-6"><?php echo limitarCaracter( $lisContent['conteudo_conteudo'], 400 ); ?></td>
                <td class="col-sm-2">
                    <a href="?p=conteudoAlterar&id=<?php echo $lisContent['id']; ?>"><button class="btn btn-info">Alterar</button></a>
                    <button class="btn btn-danger" id="btnDeletarConteudo" data-id="<?php echo $lisContent['id']; ?>" >Deletar </button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <p>
        <a href="?p=conteudoCadastrar"><button class="btn btn-large btn-warning" type="button">Novo conteudo</button></a>
    </p>

</div>