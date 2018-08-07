<h1>Solucionar chamado</h1>

<form action="<?php echo base_url(); ?>chamado/salvar" method="post">

    <fieldset>
        <legend>Dados do Chamado</legend>
        <div class="form-group col-md-9">
            <label>Código</label>
            <input type="text" name="codigo" value="<?php echo $chamados->id_cha; ?>" class="form-control" required="" readonly="" >
        </div>
        <div class="form-group col-md-9">
            <label>Requisitante</label>
            <input type="text" name="nome_requisitante" value="<?php echo $chamados->nome_requisitante; ?>" class="form-control" required="" readonly="">
        </div>
        <div class="form-group col-md-9">
            <label>E-mail</label>
            <input type="email" name="email_cha" value="<?php echo $chamados->email_cha; ?>" class="form-control" required="" readonly="">
        </div>
        <div class="row">
        </div>
        <div class="form-group col-md-3">
            <label>Telefone</label>
            <input type="text" name="telefone_cha" value="<?php echo $chamados->telefone_cha; ?>" class="form-control" maxlength="12" onkeypress="formatar('##-####-####', this)" readonly="">
        </div>
        <div class="form-group col-md-1">
            <label>Unidade</label>
            <input type="text" name="id_unid" value="<?php echo $chamados->id_unid; ?>" class="form-control" required="" readonly="">
        </div>
        <div class="form-group col-md-3">
            <label>data</label>
            <input type="date" name="data_cha" value="<?php echo $chamados->data_cha; ?>" class="form-control" required="" readonly="">
        </div>
        <div class="form-group col-md-3">
            <label>horário</label>
            <input type="time" name="horario_cha" value="<?php echo $chamados->horario_cha; ?>" class="form-control" required="" readonly="">
        </div>
        <div class="form-group col-md-9">
            <label>Descrição problema:</label>              
            <textarea class="form-control" name="descricao_servico" readonly="">
                <?php echo $chamados->descricao_servico; ?>
            </textarea>      
        </div>
    </fieldset>
    <fieldset>
        <legend>Situação chamado</legend>
        <div class="form-group col-md-9">
            <p class="text-danger">Se o chamado for solucionado, favor alterar o status.</p>
            <label>Status</label>
            <select class="form-control" name="status">
                <option value="1">Aberto</option>
                <option value="0">Solucionado</option>
            </select>
        </div>
        <div class="form-group col-md-9">
            <label>Observação do atendimento:</label>              
            <textarea class="form-control" name="observacao_atend" value="">             
            </textarea>      
        </div>
        <div class="form-group col-md-9">
            <label>Técnico</label>
            <select class="form-control" name="id_tecni">
                <?php foreach ($tecnicos as $tec) { ?>
                    <option value="<?php echo $tec->id_tecni; ?>"><?php echo $tec->nome_tecni; ?></option>
                <?php } ?>

            </select>
        </div>

    </fieldset>
    <div class="row">
        <button type="submit" class="btn-group-justified btn  btn-primary">Salvar</button>
    </div>

</form>
