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
                    <h1>Contato</h1>

                    <form class="form-horizontal" action="<?php echo base_url();?>contato/enviar" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput_nome">Nome</label>  
                                <div class="col-md-6">
                                    <input id="textinput_nome" name="nome" placeholder="digitar nome completo" class="form-control input-md" required="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput_email">Email</label>  
                                <div class="col-md-6">
                                    <input id="textinput_email" name="email" placeholder="digite um email válido" class="form-control input-md" required="" type="text">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textarea_mensagem">Mensagem</label>
                                <div class="col-md-6">                     
                                    <textarea class="form-control" id="textarea_mensagem" name="mensagem" placeholder="digite aqui sua mensagem"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="singlebutton_enviar">Enviar</label>
                                <div class="col-md-1">
                                    <button id="singlebutton_enviar" name="singlebutton_enviar" class="btn btn-primary">enviar</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>



    </body>


</html>
