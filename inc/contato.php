<?php
/**
 * File: contato.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 26/06/14
 * Time: 18:00
 * Project: estudo_php
 * Copyright: 2014
 */

if( isset($_POST['bntEnviar']) ) {
    $nome     = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_STRING );
    $email    = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
    $assunto  = filter_input( INPUT_POST, 'assunto', FILTER_SANITIZE_STRING );
    $mensagem = filter_input( INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING );

    if( !empty( $nome ) AND !empty( $email ) AND !empty( $assunto ) AND !empty( $mensagem ) ) {
        $msg = true;
    }else{
        $msg = false;
    }
}


?>
<div class="container page-header">
    <h2>Formulário de contato</h2>

    <?php if( isset( $msg ) AND $msg == true ) : ?>
        <div role="alert" class="alert fade in">
            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-group">
                        <a href="#" class="list-group-item active">
                            Dados enviados com sucesso, abaixo seguem os dados que você enviou:
                        </a>
                        <li class="list-group-item">Nome........: <?php echo $nome; ?></li>
                        <li class="list-group-item">E-mail......: <?php echo $email; ?></li>
                        <li class="list-group-item">Assunto.....: <?php echo $assunto; ?></li>
                        <li class="list-group-item">Mensagem....: <?php echo $mensagem; ?></li>
                    </ul>
                </div><!-- /.col-sm-4 -->
            </div><!-- /.row -->
        </div>
    <?php elseif( isset($msg) AND $msg == false ) : ?>
        <div role="alert" class="alert alert-danger fade in">
            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong>Desculpa!</strong> Todos os campos são obrigatórios.
        </div>
    <?php endif; ?>

    <form class="form-horizontal" role="form" action="#" method="post">
        <div class="form-group">
            <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputNome" name="nome" placeholder="digite seu nome" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
            <div class="col-sm-7">
                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="digite seu E-mail" >
            </div>
        </div>
        <div class="form-group">
            <label for="inputAssunto" class="col-sm-2 control-label">Assunto:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputAssunto" name="assunto" placeholder="digite o assunto" required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="inputMensagem" class="col-sm-2 control-label">Mensagem:</label>
            <div class="col-sm-7">
                <textarea class="form-control" rows="5" name="mensagem" required="required"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" id="bntEnviar" name="bntEnviar" value="Enviar formulário" class="btn btn-primary">
            </div>
        </div>
    </form>
</div>
