<h1>Cadastrar Secretaria</h1>

<form action="<?php echo base_url(); ?>secretarias/salvar" method="post">
    <fieldset>
        <div class="row">
            <div class="form-group col-md-9">
                <label>Nome:</label>
                <input type="text" name="nome_secret" class="form-control" placeholder="nforme o nome da secretaria" required="">
            </div>
        </div>
    </fieldset>
    <div class="row">
        <button type="submit" class="btn-group-justified btn btn-primary">Cadastrar</button>
    </div>
        
        
</form>
