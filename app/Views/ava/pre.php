<?php




//target="_blank"

?>

<div class="container">
<div class="wrapper row2">

<h2 align="center">DIVISÃO DE PLANEJAMENTO</h2>
<h3 align="center">QUESTIONÁRIO PRÉ CURSO</h3>

<p></p>
<form id="form2" name="form2" method="post" action="Ava/save_pre.php"  enctype="multipart/form-data">
<table table border=1 style="border-collapse: collapse">
  <tr>
    <td>Evento:</td><!--<input type="text" name="evento" size="10" maxlength="20"  value="CBO" readonly="true">-->
    <td><select name="curso" id="curso">
          <option value="1">Selecione...</option>
          <?php
          //while ( $dados_curso=mysqli_fetch_assoc($db_curso)) {
          // echo "<option value='".$dados_curso['id_curso']."'>".$dados_curso['nome_curso']."</option>";
          //}
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
  <td align="justify">&nbsp;&nbsp;&nbsp;Este questionário tem como objetivo conhecer as expectativas do aluno do Curso de Análise de Inteligência.</td>
  </tr>
  <tr>
  <td align="justify">&nbsp;&nbsp;&nbsp;Sua participação é fundamental para aperfeiçoamento e melhorias do curso. Isso possibilitará ao CIAER realizar ajustes e reformulações no processo de capacitação de maneira a melhor atender aos interesses da Força Aérea Brasileira.</td>
</table>

<p>
(Marque a opção mais apropriada)
<h3>1. Como o senhor(a) tomou conhecimento deste curso?</h3>
<p><input type="radio" name="conhecimento_deste_curso" value="1" required>Indicação de militar que já fez o curso.
<p><input type="radio" name="conhecimento_deste_curso" value="2" required>Divulgação por e-mail Zimbra.
<p><input type="radio" name="conhecimento_deste_curso" value="3" required>Publicação da TCA 37-20/2020.
<p><input type="radio" name="conhecimento_deste_curso" value="4" required>Solicitação de Superior.
<p><input type="radio" name="conhecimento_deste_curso" value="5" required>Outros.
</p>

<p>
 <h3>Caso tenha marcado a opção outros, digite como tomou
conhecimento do curso.</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="DIGITE AQUI" name="conhecimento_deste_curso_outro" onclick="checkCurso();"></textarea>
</p>

(Manifeste em cada quadro a sua opinião sobre o solicitado)
<p>
 <h3>2. Qual seu interesse em cursar o Curso de Contrainteligência?</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="DIGITE AQUI" name="interesse" onclick="checkCurso();" required></textarea>
</p>

<p>
 <h3>3. Que tipo de conhecimentos você imagina que irá encontrar?</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="DIGITE AQUI" name="expectativa_conhecimentos" onclick="checkCurso();" required></textarea>
</p>
<p>
 <h3>4. Quais facilidades e dificuldades imagina que poderá ter com tais conhecimentos?</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="DIGITE AQUI" name="facilidades_dificuldades" onclick="checkCurso();" required></textarea>
</p>

<p>
 <h3>5. Como imagina poder aplicar os conhecimentos adquiridos na sua rotina diária de trabalho?</h3>
 <textarea rows="6" cols="100" maxlength="700" placeholder="DIGITE AQUI" name="aplicacao_conhecimentos" onclick="checkCurso();"required></textarea>
</p>

<p align="center"><input type="submit" id="enviar" class="btn btn-primary" value="Enviar"></p>
</div>


</div>
</form>
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

