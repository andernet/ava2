<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Registro de usuários</h3>
        <hr>
        <form class="" action="/UserController/cad_user" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="user_nome">Nome</label>
               <input type="text" class="form-control" name="user_nome" id="user_nome" placeholder="Ex: 2S Fulano" value="<?= set_value('user_nome')  ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="username">Nome do usuário</label>
               <input type="text" class="form-control" name="username" id="username" placeholder="Ex: fulano_ft" value="<?= set_value('username') ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="senha">Senha</label>
               <input type="password" class="form-control" name="password" id="password" value="<?= set_value('password')  ?>">
             </div>
           </div>
           <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="senha_confirm">Confirmar Senha</label>
              <input type="password_confirm" class="form-control" name="password_confirm" id="senha_confirm" value="<?= set_value('password_confirm')  ?>">
            </div>
          </div>

          <div class="fcol-12 col-sm-6">
            <label class="mr-sm-2" for="id_user_tipo">Tipo de usuário</label>
            <select class="custom-select mr-sm-2" id="id_user_tipo" name="id_user_tipo">
              <option selected>Selecione...</option>
              <option value="3">Aluno</option>
              <option value="2">DPL</option>
              <option value="1">Admin</option>
            </select>
          </div>
</br>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
          </div>
<br />
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
            
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

