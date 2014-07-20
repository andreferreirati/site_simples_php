<?php
/**
 * File: clientesCadastrar.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 18/07/14
 * Time: 16:15
 * Project: estudo_php
 * Copyright: 2014
 */

?>

<h3>Formulário de cadastro de Clientes</h3>
<div class="msgRetorno"></div>
<form class="form-horizontal" action="" method="post" id="frmCadastrarClientes" name="form_clientes" >
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Id:</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="idCliente" name="idCliente" disabled="disabled">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Nome:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nome" name="nome" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">E-mail:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="email" name="email" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-lg-offset-3">
            <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-pencil"> Cadastrar dados</span>
                <img src="<?php echo $base_url ?>/admin/images/loader.gif" class="load" alt="Alterando dados" style="display: none;"/>
            </button>
            <a href="?p=clientes"  class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-arrow-left"> Voltar</span></a>
        </div>
    </div>
    <input type="hidden" name="idCliente" value="<?php echo $res['id_cliente'] ?>"/>
</form>