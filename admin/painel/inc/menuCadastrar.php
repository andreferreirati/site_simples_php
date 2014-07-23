<?php
/**
 * File: menuCadastrar.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 21:46
 * Project: estudo_php
 * Copyright: 2014
 */
?>
<h3>Formulário de alterar Clientes</h3>
<div class="msgRetorno"></div>
<form class="form-horizontal" action="" method="post" id="frmCadastrarMenu" name="form_menu" >
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
        <label class="control-label col-sm-3" for="inputSuccess3">Url para página:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="href" name="href" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Hint para menu:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="hint" name="hint"  >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Selecionar situação:</label>
        <div class="col-sm-5">
            <select class="form-control" name="sit_cancelado">
                <option value="">--Selecione--</option>
                <option value="N">Ativo</option>
                <option value="S">Cancelado</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-lg-offset-3">
            <button type="submit" class="btn btn-primary btn-lg btn-responsive"><span class="glyphicon glyphicon-pencil"> Cadastrar dados</span>
                <img src="../../admin/images/loader2.gif" class="load" alt="Alterando dados" style="display: none;"/>
            </button>
            <a href="?p=menu"  class="btn btn-warning btn-lg btn-responsive"><span class="glyphicon glyphicon-arrow-left"> Voltar</span></a>
        </div>
    </div>
</form>