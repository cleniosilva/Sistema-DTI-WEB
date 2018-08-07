<h1>Gerenciar Secretarias</h1>

<div class="col-md-2">
    <div class="row">
        <a href="<?php echo base_url(); ?>secretarias/novo" class="btn btn-primary margin-button15">Nova Secretaria</a>
    </div>
</div>

<div class="row">
    <table class="table table-responsive table-striped">
        <thead>
        <th class="text-center">CÓDIGO</th>
        <th class="text-center">NOME</th>
        </thead>
        
        <?php foreach ($secretaria as $secret){?>
        <tr>
            <td><?php echo $secret->id_secret; ?></td>
             <td><?php echo $secret->nome_secret; ?></td>
             
             <td><a href="<?php echo base_url('secretarias/editar/'.$secret->id_secret);?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                 <a href="<?php echo base_url('secretarias/deletar/'.$secret->id_secret);?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover o registro')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
             </td>
        </tr>
        <?php } ?>
    </table>
</div>
