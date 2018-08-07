<h1>Editar Técnico em informática</h1>

<form action="<?php echo base_url();?>tecnicos/salvar" method="post">
    <fieldset>
        <div class="row">
            <div class="form-group col-md-9">
                <label>codigo:</label>
                <input type="text" name="codigo" value="<?php echo $tecnico->id_tecni ?>" class="form-control" placeholder="informe o nome" required="">
            </div>
            <div class="form-group col-md-9">
                <label>Nome:</label>
                <input type="text" name="nome" value="<?php echo $tecnico->nome_tecni ?>" class="form-control" placeholder="informe o nome" required="">
            </div>
            <div class="form-group col-md-9">
                <label>E-mail:</label>
                <input type="email" name="email" value="<?php echo $tecnico->email_tecni ?>" class="form-control" placeholder="informe o email" required="">
            </div>
            <div class="form-group col-md-5">
                <label>Telefone:</label>
                <input type="text" name="telefone" value="<?php echo $tecnico->telefone_tecni ?>" class="form-control" placeholder="informe o nome" required="" maxlength="12" onkeypress="formatar('##-####-####', this)">
            </div>
        </div>
    </fieldset>
    <div class="row">
        <button type="submit" class="btn-group-justified btn btn-primary">Atualizar</button>
    </div>
    
</form>