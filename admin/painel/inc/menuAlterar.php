<?php
/**
 * File: menuAlterar.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 21:48
 * Project: estudo_php
 * Copyright: 2014
 */


$idMenu    = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT  );
$dadosMenu = new \admin\app\controller\Menu();
$res       = $dadosMenu->procuraMenuPorId( $idMenu );

?>

<h3>Formulário de alterar Clientes</h3>
<div class="msgRetorno"></div>
<form class="form-horizontal" action="" method="post" id="frmAlterarMenu" name="form_menu" >
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Id:</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="idCliente" name="idCliente" value="<?php echo $res['id_menu'] ?>" disabled="disabled">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Nome:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $res['nome_menu'] ?>" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Url para página:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="href" name="href" value="<?php echo $res['href_menu'] ?>" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Hint para menu:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="hint" name="hint" value="<?php echo $res['hint_menu'] ?>" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Selecionar situação:</label>
        <div class="col-sm-5">
            <select class="form-control" name="sit_cancelado">
                <option value="">--Selecione--</option>
                <option value="N" <?php echo  ( $res['sit_cancelado'] == 'N' ) ? 'selected="selected"' : '' ?> >Ativo</option>
                <option value="S" <?php echo  ( $res['sit_cancelado'] <> 'N' ) ? 'selected="selected"' : '' ?> >Cancelado</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-lg-offset-3">
            <button type="submit" class="btn btn-primary btn-lg btn-responsive"><span class="glyphicon glyphicon-pencil"> Alterar dados</span>
                <img src="../../admin/images/loader2.gif" class="load" alt="Alterando dados" style="display: none;"/>
            </button>
            <a href="?p=menu"  class="btn btn-warning btn-lg btn-responsive"><span class="glyphicon glyphicon-arrow-left"> Voltar</span></a>
        </div>
    </div>
    <input type="hidden" name="idMenu" value="<?php echo $res['id_menu'] ?>"/>
</form>