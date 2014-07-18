<?php
/**
 * File: clientesAlterar.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language:
 * Date: 18/07/14
 * Time: 11:58
 * Project: estudo_php
 * Copyright: 2014
 */

$idCliente    = filter_input( INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT  );
$dadosCliente = new \admin\app\controller\Cliente();
$res          = $dadosCliente->procuraClientePorId( $idCliente );

?>

<h3>Formulário de alterar Clientes</h3>
<div class="msgRetorno"></div>
<form class="form-horizontal" action="" method="post" id="frmAlterarClientes" name="form_clientes" >
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Id:</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="idCliente" name="idCliente" value="<?php echo $res['id_cliente'] ?>" disabled="disabled">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Nome:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $res['nome_cliente'] ?>" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">E-mail:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $res['email_cliente'] ?>" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-lg-offset-3">
            <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-pencil"> Alterar dados</span>
                <img src="<?php echo $base_url ?>/admin/images/loader.gif" class="load" alt="Alterando dados" style="display: none;"/>
            </button>
            <a href="clientes"  class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-arrow-left"> Voltar</span></a>
        </div>
    </div>
    <input type="hidden" name="idCliente" value="<?php echo $res['id_cliente'] ?>"/>
</form>