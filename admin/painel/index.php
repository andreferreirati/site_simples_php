<?php
/**
 * File: index.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 17/07/14
 * Time: 00:46
 * Project: estudo_php
 * Copyright: 2014
 */

require_once ('../../config.php');
//Verifica se existe um usuário logado no sistema
\admin\app\controller\Login::verificaLogadoSistema('usuario_logado');
echo'<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">';
echo '<pre>'.__FILE__.': '.__LINE__.'<hr>';print_r($_REQUEST);echo'<hr></pre>';
echo '</div>';

if( isset( $_GET['p'] ) && $_GET['p'] == 'logout' ) {
    \admin\app\controller\Login::deslogarSistema('usuario_logado');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site simples em PHP">
    <meta name="author" content="Luis Alberto Concha Curay">
    <link rel="icon" href="<?php echo $base_url ?>/publico/imagens/favicon.ico">
    <title>Administração</title>
    <link href="<?php echo $base_url ?>/publico/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>/publico/bootstrap/css/dashboard.css" rel="stylesheet">
    <link href="<?php echo $base_url ?>/admin/css/painelAdmin.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sites simples PHP</a>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" placeholder="Search...">
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Área do usuário <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li class="dropdown-header">Opções</li>
                        <li><a href="#">Alterar senha</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Atualizar dados</a></li>
                        <li><a href="/admin/painel?p=logout">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav navbar-link">
            <li class="nav-header"><i class="glyphicon glyphicon-user"></i> Usuários</a></li>
              <li><a href="#">Pesquisar</a></li>
              <li><a href="#">Cadastrar</a></li>
              <li><a href="#">Alterar</a></li>
          </ul>
          <ul class="nav navbar-link">
              <li class="nav-header"><i class="glyphicon glyphicon-file"></i> Páginas</a></li>
              <li><a href="#">Pesquisar</a></li>
              <li><a href="#">Cadastrar</a></li>
              <li><a href="#">Alterar</a></li>
          </ul>
          <ul class="nav navbar-link">
              <li class="nav-header"><i class="glyphicon glyphicon-th"></i> Menu</a></li>
              <li><a href="#">Pesquisar</a></li>
              <li><a href="#">Cadastrar</a></li>
              <li><a href="#">Alterar</a></li>
          </ul>
          <ul class="nav navbar-link">
              <li class="nav-header"><i class="glyphicon glyphicon-globe"></i> Páginas</a></li>
              <li><a href="#">Pesquisar</a></li>
              <li><a href="#">Cadastrar</a></li>
              <li><a href="#">Alterar</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h5  class="sub-header text-right">
              <span class="txtDadosColaborador">Colaborador:</span> <?php echo $_SESSION['nome_usuario']; ?> - <span class="txtDadosColaborador">CPF: </span><?php echo $_SESSION['cpf_usuario']; ?>
          </h5>
          <div class="table-responsive">

          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $base_url ?>/publico/js/jquery.min.js"></script>
    <script src="<?php echo $base_url ?>/publico/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
