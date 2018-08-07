<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Clênio Eduardo">
        <title>Sistema DTI-Web</title>
        <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <link href="<?php echo base_url();?>estilos/cover.css" rel="stylesheet">       
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
                                    <li><a href="<?php echo base_url();?>contato">Contato</a></li>
                                    <li><a class="glyphicon glyphicon glyphicon-lock"href="<?php echo base_url();?>login"></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="inner cover">
                        <h1 class="cover-heading">Sistema DTI-WEB.</h1>
                        <p class="lead">O DTI-WEB é um sistema para realização de chamados de suporte técnico. O sistema tem o intuito de facilitar o atendimento aos problemas técnicos que venham ocorrer nas secretarias ou unidades públlicas das Prefeituras Municipais.</p>
                        <p class="lead">
                            <a href="<?php echo base_url();?>chamado" class="btn btn-lg btn-default">Registrar chamado</a>
                        </p>
                    </div>

                    <div class="mastfoot">
                        <div class="inner">
                            <p>© Departamento de tecnologia da Informação, Desenvolvido por: <a href="https://www.facebook.com/clenio.eduardo.5">Clênio Eduardo</a>.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>       
        <script src="<?php echo base_url();?>boostrap/js/bootstrap.min.js"></script>
    </body>
</html>
        