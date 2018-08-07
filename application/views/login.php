<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Clênio Eduardo">
        <title>Sistema DTI-Web</title>
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>estilos/cover.css" rel="stylesheet">  
    </head>

    <body>
        <div class="site-wrapper">

            <div class="site-wrapper-inner">

                <div class="cover-container">

                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">DTI-WEB</h3>
                            <nav>
                                <ul class="nav masthead-nav">
                                    <li class="active"><a href="<?php echo base_url(); ?>sistema">Inicio</a></li>
                                    <li><a href="<?php echo base_url(); ?>contato">Contato</a></li>
                                    <li><a class="glyphicon glyphicon glyphicon-lock"href="<?php echo base_url(); ?>login"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <h1>Área administrativa</h1>
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>login/logar">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="usuario">Usuário</label>  
                                <div class="col-md-4">
                                    <input id="usuario" name="usuario" placeholder="informe seu usuário" class="form-control input-md" required="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput_email">Senha</label>  
                                <div class="col-md-4">
                                    <input id="senha" name="senha" placeholder="informe sua senha" class="form-control input-md" required="" type="password">

                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton_enviar">Entrar</label>
                                <div class="col-md-1">
                                    <button id="singlebutton_enviar" name="singlebutton_enviar" class="btn btn-primary">entrar</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>


    </body>