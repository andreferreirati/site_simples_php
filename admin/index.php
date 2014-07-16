<?php
/**
 * File: index.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 14/07/14
 * Time: 21:39
 * Project: estudo_php
 * Copyright: 2014
 */
require_once ('../config.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel admin</title>

    <link rel="stylesheet" href="<?php echo $base_url ?>/publico/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url ?>/admin/css/styloAdmin.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="login">
        <h1>Sistema de Noticias</h1>
        <h2>Área restrita</h2>
        <div class="msgRetorno"></div>
        <form action="" class="form" method="post" name="form_login" id="defaultForm">
            <div class="form-group" id="divSenha">
                <label>CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="cpf"/>
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control input-lg" placeholder="senha"/>
            </div>

            <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"> Entrar</span>
                <img src="<?php echo $base_url ?>/admin/images/loader.gif" class="load" alt="Carregando" style="display: none;"/>
            </button>
        </form>

    </div>
    <div id="aviso">
        <p><span>Importante:</span>
            O sistema lembra que não solicita e nunca solicitou informações
            pessoais ou troca de senhas nem envia qualquer notificação
            por correio eletronico ou mensagem de celular. </p>
    </div>
</div>
<script src="<?php echo $base_url ?>/publico/js/jquery.min.js"></script>
<script src="<?php echo $base_url ?>/publico/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $base_url ?>/publico/bootstrap/js/bootstrapValidator.js"></script>
<script src="<?php echo $base_url ?>/admin/js/login.js"></script>
<script src="<?php echo $base_url ?>/admin/js/funcoes.js"></script>

</body>
</html>