<h1> Gerenciar Técnicos</h1>

<div class="col-md-2">
    <div class="row">
        <a href="<?php echo base_url(); ?>tecnicos/novo" class="btn btn-primary margin-button15">Novo Técnico</a>
    </div>
</div>

<div class="row">
    <table class="table table-responsive table-striped">
        <thead>
        <th class="text-center">CÓDIGO</th>
        <th class="text-center">NOME</th>
        <th class="text-center">EMAIL</th>
        <th class="text-center">TELEFONE</th>

        </thead>
        <?php foreach ($tecnicos as $tenic) { ?>
            <tr>
                <td><?php echo $tenic->id_tecni; ?></td>
                <td><?php echo $tenic->nome_tecni; ?></td>
                <td><?php echo $tenic->email_tecni; ?></td>
                <td><?php echo $tenic->telefone_tecni; ?></td>
                
                <td><a href="<?php echo base_url('tecnicos/editar/'.$tenic->id_tecni); ?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="<?php echo base_url('tecnicos/deletar/'.$tenic->id_tecni); ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover o registro')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
        </tr>
        <?php } ?>




    </table>
</div>
