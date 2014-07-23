<?php
/**
 * File: conteudoCadastrar.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 20/07/14
 * Time: 15:59
 * Project: estudo_php
 * Copyright: 2014
 */
?>

<!--<script type="text/javascript" src="--><?php //__DIR__ ?><!--/../../admin/tinymce/tinymce.min.js"></script>-->

<script type="text/javascript" src="<?php $base_url ?>/admin/lib/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        theme: "modern",
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ]
    });
</script>

<h3>Formulário de cadastro de Conteúdo</h3>
<div class="msgRetorno"></div>
<form class="form-horizontal" action="" method="post" id="frmCadastrarConteudo" name="form_conteudo" >
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Id:</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="idConteudo" name="idConteudo" disabled="disabled">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Titulo:</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="titulo" name="titulo" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Slug:</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="slug" name="slug" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-3" for="inputSuccess3">Conteudo:</label>
        <div class="col-sm-7" id="divConteudoTextearea">
            <textarea id="conteudo" name="conteudo"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-5 col-lg-offset-3">
            <button type="submit" class="btn btn-primary btn-lg btn-responsive"><span class="glyphicon glyphicon-pencil"> Cadastrar dados</span>
                <img src="../../admin/images/loader2.gif" class="load" alt="Alterando dados" style="display: none;"/>
            </button>
            <a href="?p=conteudo"  class="btn btn-warning btn-lg btn-responsive"><span class="glyphicon glyphicon-arrow-left"> Voltar</span></a>
        </div>
    </div>
</form>