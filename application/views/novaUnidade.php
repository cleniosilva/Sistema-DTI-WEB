<h1>Cadastrar Unidade Pública</h1>

<form action="<?php echo base_url(); ?>unidades/salvar" method="post">
    <fieldset>
        <legend>Dados da Unidade:</legend>
        <div class="form-group col-md-9">
            <label>Nome:</label>
            <input type="text" name="nome_unid" class="form-control" placeholder="Informe o nome da unidade" required="">
        </div>
        <div class="form-group col-md-4">
            <label>Telefone:</label>
            <input type="text" name="telefone_unid" class="form-control" placeholder="telefone" required="" maxlength="12" onkeypress="formatar('##-####-####', this)">
        </div>

        <div class="form-group col-md-9">
            <label>Secretária/ Departamento</label>
            <select class="form-control" name="id_secret">
                
                <?php foreach ($secretaria as $secret) { ?>
                    <option value="<?php echo $secret->id_secret; ?>"><?php echo $secret->nome_secret; ?></option>
                <?php } ?>
            </select>
        </div>
    </fieldset>
    <div class="row"></div>
    <fieldset>
        <legend>Endereço</legend>
        <div class="form-group col-md-6">
            <label>Logradouro:</label>
            <input type="text" name="rua_unid" class="form-control" placeholder="Informe o nome da Rua" required="">
        </div>
        <div class="form-group col-md-3">
            <label>Numero:</label>
            <input type="number" name="numero_unid" class="form-control" placeholder="numero" required="">
        </div>
        <div class="form-group col-md-7">
            <label>Bairro:</label>
            <input type="text" name="bairro_unid" class="form-control" placeholder="Informe o nome do bairro" required="">
        </div>
        <div class="form-group col-md-7">
            <label>Cidade:</label>
            <input type="text" name="cidade_unid" class="form-control" placeholder="nome da cidade" required="">
        </div>
    </fieldset>
    <div class="row">
        <button type="submit" class="btn-group-justified btn btn-primary">Cadastrar</button>
    </div>



</form>