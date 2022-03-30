
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Login</h3>
        <hr>
  
        <form class="" action="<?= base_url('auth/check') ?>" method="post">
          <?= csrf_field(); ?>
          <?php if(!empty(session()->getFlashdata('fail'))) : ?>
           <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>

         <?php endif?>
          <div class="form-group">
           <label for="username">Nome do usuário</label>
           <input type="text" placeholder="Ex: 2S Fulano"  class="form-control" name="username" id="username" value="<?= set_value('username') ?>">
          </div>
          <div class="form-group">
           <label for="password">password</label>
           <input type="password" placeholder="Ex: 2S Fulano"  class="form-control" name="password" id="password" value="<?= set_value('password') ?>">
          </div>
          
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
              <a  href="<?= site_url("auth/register") ?>">Não tem uma conta ainda?</a>
            </div>
            
          </div>
        </form>
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
  </div>

</div>
