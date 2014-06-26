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
?>
<div class="container page-header">
    <h2>Formulário de contato</h2>

    <form class="form-horizontal" role="form" action="#" method="post">
        <div class="form-group">
            <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputNome" placeholder="digite seu nome" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">e-mail</label>
            <div class="col-sm-7">
                <input type="email" class="form-control" id="inputEmail3" placeholder="digite seu E-mail" required="required">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAssunto" class="col-sm-2 control-label">Assunto:</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="inputAssunto" placeholder="digite o assunto" required="required">
            </div>
        </div>

        <div class="form-group">
            <label for="inputMensagem" class="col-sm-2 control-label">Mensagem:</label>
            <div class="col-sm-7">
                <textarea class="form-control" rows="5" required="required"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" id="bntEnviar" class="btn btn-primary">Enviar formulário</button>
            </div>
        </div>
    </form>
</div>
