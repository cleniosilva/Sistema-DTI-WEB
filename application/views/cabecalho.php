<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//impedi o acesso a essa pagina fora do servidor
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Clenio Eduardo">
        <title>DTI-WEB Painel administrativo</title>
        <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/estilos/painel.css">
    </head>
    <body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DTI-WEB</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Bem vindo!</a></li>
            <li><a href="<?php echo base_url();?>login/logout"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
            
          </ul>
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url();?>usuarios">Usuários</a></li>
            <li><a href="<?php echo base_url();?>tecnicos">Técnicos</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url();?>unidades">Unidades</a></li>
            <li><a href="<?php echo base_url();?>secretarias">Secretarias</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo base_url();?>chamado/listarChamadosAberto">Chamados em aberto</a></li>
            <li><a href="<?php echo base_url();?>chamado/listarChamadosAtendidos">Chamados atendidos</a></li>
          </ul>
            <ul class="nav nav-sidebar">
           <!-- <li><a href="">Gerar relatório de chamados atendindos por periodo de tempo</a></li>-->
           
          </ul>
        </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">