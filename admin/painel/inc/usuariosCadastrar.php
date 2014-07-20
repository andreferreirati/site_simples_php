<?php
/**
 * File: usuariosCadastrar.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 00:37
 * Project: estudo_php
 * Copyright: 2014
 */
?>
<h3>Formulário de cadastro de Usuarios</h3>
<div class="msgRetorno"></div>
<form class="form-horizontal" action="" method="post" id="frmCadastrarUsuario" name="form_usuario" >
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Id:</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="idUsuario" name="idUsuario" disabled="disabled">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Nome:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">CPF:</label>
        <div class="col-sm-5" id="divCPF">
            <input type="text" class="form-control" id="cpfUsuario" name="cpfUsuario" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Senha:</label>
        <div class="col-lg-3">
            <input type="password" class="form-control" name="senhaUsuario" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Repita a senha:</label>
        <div class="col-lg-3">
            <input type="password" class="form-control" name="confirmaSenhaUsuario" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Selecionar situação:</label>
        <div class="col-sm-5">
            <select class="form-control" name="sit_cancelado">
                <option value="">--Selecione--</option>
                <option value="1">Ativo</option>
                <option value="2">Cancelado</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-lg-offset-3">
            <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-pencil"> Cadastrar dados</span>
                <img src="<?php echo $base_url ?>/admin/images/loader2.gif" class="load" alt="Alterando dados" style="display: none;"/>
            </button>
            <a href="?p=usuarios"  class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-arrow-left"> Voltar</span></a>
        </div>
    </div>
    <input type="hidden" name="idCliente" value="<?php echo $res['id_cliente'] ?>"/>
</form>