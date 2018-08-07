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
        <link href="<?php echo base_url(); ?>estilos/chamado.css" rel="stylesheet">  
        <script>
            function myFunction() {
                confirm('Deseja realmente registrar esse chamado?');
            }
        </script>

    </head>
    <body>
        <div class="container">
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">DTI-WEB</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="<?php echo base_url(); ?>sistema">Inicio</a></li>

                        </ul>
                    </nav>
                </div>
            </div>

            <h1>Abrir chamado</h1>

            <form action="<?php echo base_url(); ?>chamado/salvar" method="post">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Requisitante:</label>
                        <input type="text" name="nome_requisitante" class="form-control" placeholder="Insisra o nome" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <label>E-mail:</label>
                        <input type="email" name="email_cha" class="form-control" placeholder="Insisra o emial" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>Telefone (RAMAL):</label>
                        <input type="text" name="telefone_cha" class="form-control" required="" maxlength="12" onkeypress="formatar('##-####-####', this)" >
                    </div>
                    <div class="form-group col-md-4">
                        <label>Unidade:</label>
                        <select class="form-control" name="id_unid">
                            <?php foreach ($unidades as $unid) { ?>
                                <option value="<?php echo $unid->id_unid; ?>"><?php echo $unid->nome_unid; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label>Data de abertura:</label>
                        <input type="date" name="data_cha" class="form-control" required="">
                    </div>
                    <div class="form-group col-md-2">
                        <label>Horário de abertura:</label>
                        <input type="time" name="horario_cha" class="form-control" required="">
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Descrição problema:</label>              
                        <textarea class="form-control" name="descricao_servico" placeholder="Informe o problema ocorrido" rows="7"></textarea><!--rows="7" cols="80"-->                       

                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn-group-vertical btn  btn-primary" onclick="myFunction();">Registrar chamado</button>
                </div>
            </form>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>       
        <script src="<?php echo base_url(); ?>boostrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/estilos/validacao.js"></script>
    </body>
</html>
