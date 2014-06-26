<?php
/**
 * File: nav_bar.php
 * Author: Luis Alberto Concha Curay
 * E-mail: luvett11@gmail.com
 * Language: 
 * Date: 26/06/14
 * Time: 16:40
 * Project: estudo_php
 * Copyright: 2014
 */
?>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Site Simples em php</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="?p=empresa">Empresa</a></li>
                <li><a href="#produtos">Produtos</a></li>
                <li><a href="#serviços">Serviços</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>