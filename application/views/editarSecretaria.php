<h1>Editar Secretaria</h1>

<form action="<?php echo base_url(); ?>secretarias/salvar" method="post">
    <fieldset>
        <div class="form-group col-md-9">
                <label>codigo:</label>
                <input type="text" name="codigo" value="<?php echo $secretaria->id_secret ?>" class="form-control" placeholder="informe o nome" required="">
            </div>
        <div class="row">
            <div class="form-group col-md-9">
                <label>Nome:</label>
                <input type="text" name="nome_secret" value="<?php echo $secretaria->nome_secret ?>" class="form-control" placeholder="nforme o nome da secretaria" required="">
            </div>
        </div>
    </fieldset>
    <div class="row">
        <button type="submit" class="btn-group-justified btn btn-primary">Atualizar</button>
    </div>
        
        
</form>
