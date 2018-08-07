<h1>Gerenciar Chamados em Aberto</h1>

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
                    <td class="btn btn-danger"><?php
                        if ($cha->status == 1) {
                            echo 'Aberto';
                        }
                        ?></td>


                    <td><a href="<?php echo base_url('chamado/pesquisarChamadosEmAberto/' . $cha->id_cha); ?>" class="btn btn-info btn-group"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                        <a href="<?php echo base_url('chamado/editar/' . $cha->id_cha); ?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a href="<?php echo base_url('chamado/deletar/' . $cha->id_cha); ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente remover o registro')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </tr>
    <?php } ?>
        </table>
    </div>
<?php echo $pagination; ?>
<?php endif; ?>

