<h1>Atualizar Unidade Pública</h1>

<form action="<?php echo base_url(); ?>unidades/salvar" method="post">
    <fieldset>
        <legend>Dados da Unidade:</legend>
        <div class="form-group col-md-9">
                <label>codigo:</label>
                <input type="text" name="codigo" value="<?php echo $unidade->id_unid ?>" class="form-control" placeholder="informe o nome" required="">
            </div>
        <div class="form-group col-md-9">
            <label>Nome:</label>
            <input type="text" name="nome_unid" value="<?php echo $unidade->nome_unid ?>"class="form-control" placeholder="Informe o nome da unidade" required="">
        </div>
        <div class="form-group col-md-4">
            <label>Telefone:</label>
            <input type="text" name="telefone_unid" value="<?php echo $unidade->telefone_unid ?>" class="form-control" placeholder="telefone" maxlength="12" onkeypress="formatar('##-####-####', this)" required="">
        </div>

        <div class="form-group col-md-9">
            <p class="text-danger">Favor atualizar o campo Secretaria/ Departamento</p>
            <label>Secretária/ Departamento</label>
            <select class="form-control" name="id_secret" required="">   
                <option></option>
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
            <input type="text" name="rua_unid" value="<?php echo $unidade->rua_unid ?>" class="form-control" placeholder="Informe o nome da Rua" required="">
        </div>
        <div class="form-group col-md-3">
            <label>Numero:</label>
            <input type="number" name="numero_unid" value="<?php echo $unidade->numero_unid ?>" class="form-control" placeholder="numero" required="">
        </div>
        <div class="form-group col-md-7">
            <label>Bairro:</label>
            <input type="text" name="bairro_unid" value="<?php echo $unidade->bairro_unid ?>" class="form-control" placeholder="Informe o nome do bairro" required="">
        </div>
        <div class="form-group col-md-7">
            <label>Cidade:</label>
            <input type="text" name="cidade_unid" value="<?php echo $unidade->cidade_unid ?>"class="form-control" placeholder="nome da cidade" required="">
        </div>
    </fieldset>
    <div class="row">
        <button type="submit" class="btn-group-justified btn btn-primary">Atualizar</button>
    </div>



</form>