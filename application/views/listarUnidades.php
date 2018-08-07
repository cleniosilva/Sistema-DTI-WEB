<h1>Gerenciar Unidades Públicas</h1>

<div class="col-md-2">
    <div class="row">
        <a href="<?php echo base_url(); ?>unidades/novo" class="btn btn-primary margin-button15">Nova Unidade</a>
    </div>
</div>

<?php if($unidades): ?>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <th class="text-center">CÓDIGO</th>
        <th class="text-center">NOME</th>
        <th class="text-center">TELEFONE</th>
        </thead>
        
        <?php foreach ($unidades as $unid){?>
        <tr>
            <td><?php echo $unid->id_unid; ?></td>
            <td><?php echo $unid->nome_unid; ?></td>
            <td><?php echo $unid->telefone_unid; ?></td>
            
            <td><a href="<?php echo base_url('unidades/editar/'.$unid->id_unid);?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                 <a href="<?php echo base_url('unidades/deletar/'.$unid->id_unid);?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover o registro')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </tr>
        <?php } ?>
    </table>
</div>
<?php echo $pagination; ?>
<?php endif; ?>
