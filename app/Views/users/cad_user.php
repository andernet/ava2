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

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Registro de aluno</h3>
        <hr>
        <form class="" action="/AlunoController/save" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="nome_aluno">Nome</label>
               <input type="text" class="form-control" name="nome_aluno" id="nome_aluno" placeholder="Ex: 2S Fulano" value="<?= set_value('nome_aluno')  ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="cpf">CPF</label>
               <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Ex: fulano_ft" value="<?= set_value('cpf') ?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="id_tratamento">Tratamento</label>
               <input type="text" class="form-control" name="id_tratamento" id="id_tratamento" value="">
             </div>
           </div>
           <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="id_posto">Posto</label>
              <input type="text" class="form-control" name="id_posto" id="id_posto" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="id_quadro">Quadro</label>
              <input type="text" class="form-control" name="id_quadro" id="id_quadro" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="id_especialidade">Especialidade</label>
              <input type="text" class="form-control" name="id_especialidade" id="id_especialidade" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="id_om">OM</label>
              <input type="text" class="form-control" name="id_om" id="id_om" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="saram">SARAM/EB/MB/CV/CD</label>
              <input type="text" class="form-control" name="saram" id="saram" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="password">Senha</label>
               <input type="password" class="form-control" name="password" id="password" value="">
             </div>
           </div>
           <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="password_confirm">Confirmar Senha</label>
              <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
            </div>
          </div>
          <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="curso">Curso</label>
              <input type="text" class="form-control" name="id_curso" id="id_curso" value="">
            </div>
          </div>


         
<br />
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
              <button type="submit" name='validate' class="btn btn-primary">Gravar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>