

<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>PÓS CURSO</h3>
        <hr>
        <form class="" action="/AvaController/save_pos" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <input type="checkbox" name="mycheck" value="1" />
              </div>
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
