<h1>Chamados Atendidos</h1>

<?php if ($chamados): ?>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <th class="text-left">CÓDIGO</th>
            <th class="text-left">HORÁRIO</th>
            <th class="text-left">DATA</th>
            <th class="text-left">STATUS</th>
            </thead>

            <?php foreach ($chamados as $cha) { ?>
                <tr>
                    <td><?php echo $cha->id_cha; ?></td>
                    <td><?php echo $cha->horario_cha; ?></td>
                    <td><?php echo $cha->data_cha; ?></td>
                    <td class="btn btn-success"><?php
                        if ($cha->status == 0) {
                            echo 'Solucionado';
                        }
                        ?></td>


                    <td><a href="<?php echo base_url('chamado/pesquisar/' . $cha->id_cha); ?>" class="btn btn-info btn-group"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                        <a href="<?php echo base_url('chamado/deletar/' . $cha->id_cha); ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover o registro')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </tr>
    <?php } ?>
        </table>
    </div>
<?php echo $pagination; ?>
<?php endif; ?>

