<h1>Cadastrar Técnico em informática</h1>

<form action="<?php echo base_url();?>tecnicos/salvar" method="post">
    <fieldset>
        <div class="row">
            <div class="form-group col-md-9">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="informe o nome" required="">
            </div>
            <div class="form-group col-md-9">
                <label>E-mail:</label>
                <input type="email" name="email" class="form-control" placeholder="informe o email" required="">
            </div>
            <div class="form-group col-md-5">
                <label>Telefone:</label>
                <input type="text" name="telefone" class="form-control" placeholder="informe o telefone" required="" maxlength="12" onkeypress="formatar('##-####-####', this)" >
            </div>
        </div>
    </fieldset>
    <div class="row">
        <button type="submit" class="btn-group-justified btn btn-primary">Cadastrar</button>
    </div>
    
</form>