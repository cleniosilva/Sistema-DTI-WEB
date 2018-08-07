<h1>Cadastrar Usuário</h1>

<form action="<?php echo base_url();?>usuarios/salvar" method="post">
    <fieldset>
        <div class="row">
            <div class="form-group col-md-6">
                <p class="text-danger">Insira um nome de usuário sem espaços com até 8 caracteres</p>
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Insira seu username" required="" maxlength="8">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                 <p class="text-danger">Insira uma senha sem espaços com até 8 caracteres</p>
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Insira sua senha" required="" maxlength="8">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Insira seu email" required="">
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn-group-justified btn btn-primary" id="btncadastrar">Cadastrar</button>
        </div>


            
    </fieldset>
</form>