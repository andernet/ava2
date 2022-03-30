<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <title>Registro</title>
</head>
<body>

<div class="container">

  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Registro de usuários</h3>
        <hr>
        <form class="" action="<?= base_url('auth/save') ?>" method="post">
        <?= csrf_field(); ?>
        
        <?php if(!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('fail'); ?>
            </div>
            <?php endif ?>
        <?php if(!empty(session()->getFlashdata('success'))) : ?>   
        <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
        </div>

        <?php endif ?>

        
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="user_nome">Nome</label>
               <input type="text" class="form-control" name="user_nome" id="user_nome" placeholder="Ex: 2S Fulano" value="<?= set_value('user_nome')?>">
               <!-- <span class="text-danger"><?php //isset($validation) ? echo listErrors('user_nome'); ?> -->
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="username">Nome do usuário</label>
               <input type="text" class="form-control" name="username" id="username" placeholder="Ex: fulano_ft" value="<?= set_value('username')?>">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
               <label for="password">password</label>
               <input type="text" class="form-control" name="password" id="password" value="<?= set_value('password')?>">
             </div>
           </div>
           <div class="col-12 col-sm-6">
             <div class="form-group">
              <label for="password_conf">Confirmar password</label>
              <input type="text" class="form-control" name="password_conf" id="password_conf" value="<?= set_value('password_conf')?>">
            </div>
          </div>

          <div class="fcol-12 col-sm-6">
            <label class="mr-sm-2" for="id_user_tipo">Tipo de usuário</label>
            <select class="custom-select mr-sm-2" name="id_user_tipo" id="id_user_tipo">
              <option selected>Selecione...</option>
              <option value="1">Aluno</option>
              <option value="2">Monitor</option>
              <option value="3">Admin</option>
            </select>
          </div>
          
          <div class="text-danger">
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
<br />
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Gravar</button>
        </div>
        </form>
        <a  href="<?= site_url("auth") ?>">Login</a>
      </div>
    </div>
  </div>
</div>
