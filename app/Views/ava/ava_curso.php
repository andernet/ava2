

<div class="container">
  <div class="row">

  <div id="container" class="clear">
<h2 align="center">DIVISÃO DE PLANEJAMENTO</h2>
<h3 align="center">AVALIAÇÃO FINAL DO CURSO</h3>

<p></p>
<form id="form2" name="form2" method="post" action="gravar_av_final.php"  enctype="multipart/form-data">
<table table border=1 style="border-collapse: collapse">
  <tr>
    <td>Evento:</td><!--<input type="text" name="evento" size="10" maxlength="20"  value="CBO" readonly="true">-->
    <td><select name="curso" id="curso">
          <option value="">Selecione...</option>
          <?php
          // while ( $dados_curso=mysqli_fetch_assoc($db_curso)) {
          // echo "<option value='".$dados_curso['id_curso']."'>".$dados_curso['nome_curso']."</option>";
          // }
          ?>

         </select>
         </td>
    <td>Data:</td>
    <td><input type="text" name="data" size="20" maxlength="20" value="<?php //echo $data ?>" readonly="true"></td>
  </tr>
</table>
<p>
<p>

<table>
  <tr>
  <td align="justify">&nbsp;&nbsp;&nbsp;O  senhor é um elemento fundamental na avaliação de nossa instrução,  sendo a sua opinião de grande importância para o aprimoramento do  trabalho que desenvolvemos.</td>
  </tr>
  <tr>
  <td align="justify">&nbsp;&nbsp;&nbsp;No  intuito de obtê-la, apresentamos, a seguir, alguns itens  relacionados ao assunto acima indicado para que sejam avaliados e julgados de acordo com a sua percepção.</td>
  </tr>
  <tr> <td> AVALIAÇÃO GERAL ( Manifeste em cada quadro a sua opinião sobre o solicitado ) </td> </tr>
</table>

<p>
 <h3>1. QUAIS OS PONTOS POSITIVOS DO CURSO?</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="Ex: NADA RELATAR" name="avaliacao_positiva" onclick="checkCurso();"></textarea>
</p>

<p>
 <h3>1. QUAIS OS PONTOS NEGATIVOS DO CURSO?</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="Ex: NADA RELATAR" name="avaliacao_negativa" onclick="checkCurso();"></textarea>
</p>

<p>
 <h3>2. NO SEU ENTEDIMENTO, HÁ ALGUM ASSUNTO OU DISCIPLINA QUE PODEREIA TER SIDO ABORDADO OU MAIS APROFUNDADO?</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="Ex: NADA RELATAR" name="aprofundar" onclick="checkCurso();"></textarea>
</p>
<p>
 <h3>3. NA SUA VISÃO, QUAL CONHECIMENTO ADQUIRIDO PODE CONTRUBUIR COM AS SUAS ATRIBUIÇÕES COMO ELO DO SISTEMA DE INTELIGÊNCIA DA AERONÁUTICA (SINTAER), OU COM SUAS FUNÇÕES EXERCIDAS NA SUA ORGANIZAÇÃO MILITAR (OM)?</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="Ex: NADA RELATAR" name="conhecimento" onclick="checkCurso();"></textarea>
</p>
<p align="center"><input type="submit" id="enviar" value="Enviar"></p>
</div>
<!-- Footer -->
</br>
          <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
          </div>




































    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>ava_curso</h3>
        <hr>
        <form class="" action="/AvaController/save_curso" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
      <input type="checkbox" name="mycheck" value="1" />

              </div>
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