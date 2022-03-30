<?php


//target="_blank"

?>
<div class="container">
<div class="wrapper row2">


<!-- $select_curso = "SELECT * FROM curso WHERE id_situacao = 2";
$db_curso = $conn->query($select_curso);

$select_instrucoes = "SELECT * FROM instrucoes WHERE id_situacao = 2";

$db_instrucoes = $conn->query($select_instrucoes);

$select_intrutores = "SELECT * FROM instrutores WHERE id_situacao = 2";
$db_instrutores = $conn->query($select_intrutores);

$select_ava_em_branco = "SELECT id_instrucao, nome_instrucao FROM instrucoes WHERE id_situacao = 2 and id_instrucao NOT IN 
                          (SELECT id_instrucao FROM respostas WHERE id_pergunta = 'g1p1' and id_aluno = $aluno)";
 -->
//echo $select_ava_em_branco;
//exit();
$db_ava_em_branco = $conn->query($select_ava_em_branco);

?>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
<h2 align="center">DIVISÃO DE PLANEJAMENTO</h2>
<h3 align="center">AVALIAÇÃO DE INSTRUÇÃO</h3>

<p></p>
<form id="form1" name="form1" method="post" action="gravar.php"  enctype="multipart/form-data">
<table table border=1 style="border-collapse: collapse">
  <tr>
    <td>Evento:</td><!--<input type="text" name="evento" size="10" maxlength="20"  value="CBO" readonly="true">-->
    <td><select name="curso" required>
          <option>Selecione...</option>
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
  <tr>
    <td>Assunto:</td>
    <td><select name="instrucao" id="instrucao" required>
          <option>Selecione...</option>
          <?php


          // while ( $dado_ava_em_branco=mysqli_fetch_assoc($db_ava_em_branco)) {
          // echo "<option value='".$dado_ava_em_branco['id_instrucao']."'>".$dado_ava_em_branco['nome_instrucao']."</option>";

          //    //while ( $dado_ava_em_branco=mysqli_fetch_assoc($db_ava_em_branco)) {
      
          //       //echo $dado_ava_em_branco['nome_instrucao']."<br>";



          // }
          ?>

         </select>
         </td>
    <td>Instrutor:</td>
    <td><select name="instrutor" required>
          <option>Selecione...</option>
          <?php
          // while ( $dados_instrutor=mysqli_fetch_assoc($db_instrutores)) {
          // echo "<option value='".$dados_instrutor['id_instrutor']."'>".$dados_instrutor['nome_instrutor']."</option>";
          // }
          ?>

         </select>
         </td>
  </tr>
</table>
<p>

<h6 align="center">Avaliações pendentes</h6>

<?php
    // while ( $dado_ava_em_branco=mysqli_fetch_assoc($db_ava_em_branco)) {
      
    //   echo $dado_ava_em_branco['nome_instrucao']."<br>";
     
    //   }
?>
<table>
  <tr>
  <td>&nbsp;&nbsp;&nbsp;O  senhor é um elemento fundamental na avaliação de nossa instrução,  sendo a sua opinião de grande importância para o aprimoramento do  trabalho que desenvolvemos.</td>
  </tr>
  <tr>
  <td>&nbsp;&nbsp;&nbsp;No  intuito de obtê-la, apresentamos, a seguir, alguns itens  relacionados ao assunto acima indicado. Sua tarefa consistirá em  julgar cada um dos itens apresentados na listagem, de acordo com a  escala de avaliação que lhe é pertinente.</td>
  </tr>
</table>
<p>


<table>
  <tr>
  <td><strong>Escala de Avaliação (Grupo 1):</strong></td>
  </tr>
  <tr>
  <td>1 - Inadequado (a)</td>
  </tr>
  <tr>
  <td>2 - Pouco adequado (a)</td>
  </tr>
  <tr>
  <td>3 -  Adequado</td>
  </tr>
  <tr>
  <td>4 - Muito adequado (a)</td>
  </tr>
  <tr>
  <td>5  - Totalmente adequado</td>
  </tr>
</table>
<p></p>
<h3>Grupo  1 - Avaliação do Assunto</h3>

<table table border=1 style="border-collapse: collapse">
  <thead>
  <tr>
     <th align="center">CONCEITOS</th>
     <th colspan="5" align="center">ESCALA</th>
  </tr>
  </thead>
  <tbody>
  <tr>
   <td>&nbsp;</td>
    <td align="center">(1)</td>
    <td align="center">(2)</td>
    <td align="center">(3)</td>
    <td align="center">(4)</td>
    <td align="center">(5)</td>
  </tr>
  <tr>
    <td><strong>1 - APLICABILIDADE DO CONTEÚDO PROGRAMÁTICO</strong><br>Relação entre o conteúdo proposto e o trabalho que você desenvolve ou       desenvolverá na OM.</td>
    <td><input type="radio" id="gp1" name="grupo1_perguntar1" value="1" required></td>
    <td><input type="radio" name="grupo1_perguntar1" value="2" required></td>
    <td><input type="radio" name="grupo1_perguntar1" value="3" required></td>
    <td><input type="radio" name="grupo1_perguntar1" value="4" required></td>
    <td><input type="radio" name="grupo1_perguntar1" value="5" required></td>
  </tr>
  <tr>
    <td><strong>2 - IMPORTÂNCIA DO ASSUNTO</strong><br>Relação entre o conteúdo proposto e o aprimoramento do Profissional de Inteligência.</td>
    <td><input type="radio" name="grupo1_perguntar2" value="1" required></td>
    <td><input type="radio" name="grupo1_perguntar2" value="2" required></td>
    <td><input type="radio" name="grupo1_perguntar2" value="3" required></td>
    <td><input type="radio" name="grupo1_perguntar2" value="4" required></td>
    <td><input type="radio" name="grupo1_perguntar2" value="5" required></td>
  </tr>
  <tr>
    <td><strong>3 - ABRANGÊNCIA DO ASSUNTO</strong><br>Nível de profundidade com que o tema foi apresentado, tendo em vista os objetivos       propostos.</td></strong></td>
    <td><input type="radio" name="grupo1_perguntar3" value="1" required></td>
    <td><input type="radio" name="grupo1_perguntar3" value="2" required></td>
    <td><input type="radio" name="grupo1_perguntar3" value="3" required></td>
    <td><input type="radio" name="grupo1_perguntar3" value="4" required></td>
    <td><input type="radio" name="grupo1_perguntar3" value="5" required></td>
  </tr>
  <tr>
    <td><strong>4 - CARGA HORÁRIA</strong><br>Suficiência da carga horária, em relação ao conteúdo programático.</td>
    <td><input type="radio" name="grupo1_perguntar4" value="1" required></td>
    <td><input type="radio" name="grupo1_perguntar4" value="2" required></td>
    <td><input type="radio" name="grupo1_perguntar4" value="3" required></td>
    <td><input type="radio" name="grupo1_perguntar4" value="4" required></td>
    <td><input type="radio" name="grupo1_perguntar4" value="5" required></td>
  </tr>
  <tr>
    <td><strong>5 - MÉTODOS E TÉCNICAS</strong><br>Adequação dos métodos e técnicas utilizados, em relação ao conteúdo programático (aula expositiva, etc).</td>
    <td><input type="radio" name="grupo1_perguntar5" value="1" required></td>
    <td><input type="radio" name="grupo1_perguntar5" value="2" required></td>
    <td><input type="radio" name="grupo1_perguntar5" value="3" required></td>
    <td><input type="radio" name="grupo1_perguntar5" value="4" required></td>
    <td><input type="radio" name="grupo1_perguntar5" value="5" required></td>
  </tr>
  <tr>
    <td><strong>6 - RECURSOS DIDÁTICOS</strong><br>Adequação dos recursos didáticos utilizados, em relação ao conteúdo programático (transparências, projetores, apostilas).</td>
    <td><input type="radio" name="grupo1_perguntar6" value="1" required></td>
    <td><input type="radio" name="grupo1_perguntar6" value="2" required></td>
    <td><input type="radio" name="grupo1_perguntar6" value="3" required></td>
    <td><input type="radio" name="grupo1_perguntar6" value="4" required></td>
    <td><input type="radio" name="grupo1_perguntar6" value="5" required></td>
  </tr>

  </tbody>
</table>
<p></p>

 <h3>SUGESTÕES/CRÍTICAS</h3>
 <textarea rows="4" cols="50" placeholder="Ex: NADA RELATAR" name="grupo1_sugestoes"></textarea>
<p></p>

  <table>
  <tr>
  <td><strong>Escala de Avaliação (Grupos 2 e 3):</strong></td>
  </tr>
  <tr>
  <td>1 - Muito Pouco (a)</td>
  </tr>
  <tr>
  <td>2 - Pouco (a)</td>
  </tr>
  <tr>
  <td>3 - Satisfatório</td>
  </tr>
  <tr>
  <td>4 - Elevado (a)</td>
  </tr>
  <tr>
  <td>5 - Total</td>
  </tr>
</table>

<p></p>
<h3>Grupo 2 - Avaliação do Instrutor</h3>

<table table border=1 style="border-collapse: collapse">
  <thead>
  <tr>
     <th align="center">CONCEITOS</th>
     <th colspan="5" align="center">ESCALA</th>
  </tr>
  </thead>
  <tbody>
  <tr>
   <td>&nbsp;</td>
    <td align="center">(1)</td>
    <td align="center">(2)</td>
    <td align="center">(3)</td>
    <td align="center">(4)</td>
    <td align="center">(5)</td>
  </tr>
  <tr>
    <td><strong>1 - OBJETIVIDADE E CLAREZA</strong><br>Capacidade de dar explicações claras sem se afastar do tema central.</td>
    <td><input type="radio" name="grupo2_perguntar1" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar1" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar1" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar1" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar1" value="5" required></td>
  </tr>
  <tr>
    <td><strong>2 - ADEQUAÇÃO DA LINGUAGEM</strong><br>Capacidade de usar vocabulário de fácil entendimento para os alunos.</td>
    <td><input type="radio" name="grupo2_perguntar2" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar2" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar2" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar2" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar2" value="5" required></td>
  </tr>
  <tr>
    <td><strong>3 - DOMÍNIO DO ASSUNTO</strong><br>Segurança demonstrada em relação ao conteúdo programático.</td></strong></td>
    <td><input type="radio" name="grupo2_perguntar3" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar3" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar3" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar3" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar3" value="5" required></td>
  </tr>
  <tr>
    <td><strong>4 - RELACIONAMENTO COM O GRUPO</strong><br>Capacidade de promover um clima favorável para o desenvolvimento da aprendizagem.</td>
    <td><input type="radio" name="grupo2_perguntar4" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar4" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar4" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar4" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar4" value="5" required></td>
  </tr>
  <tr>
    <td><strong>5 - ESTÍMULO À PARTICIPAÇÃO DO GRUPO</strong><br>Capacidade de provocar e de incentivar a participação dos alunos.</td>
    <td><input type="radio" name="grupo2_perguntar5" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar5" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar5" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar5" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar5" value="5" required></td>
  </tr>
  <tr>
    <td><strong>6 - MOTIVAÇÃO DO GRUPO</strong><br>Capacidade de estimular e manter o interesse do grupo, em relação ao assunto abordado.</td>
    <td><input type="radio" name="grupo2_perguntar6" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar6" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar6" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar6" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar6" value="5" required></td>
  </tr>
<tr>
    <td><strong>7 - RECURSOS INSTRUMENTAIS</strong><br>Capacidade e habilidade na utilização do material didático.</td>
    <td><input type="radio" name="grupo2_perguntar7" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar7" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar7" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar7" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar7" value="5" required></td>
  </tr>
  <tr>
    <td><strong>8 - TÉCNICAS DIDÁTICAS</strong><br>Capacidade e habilidade na utilização das técnicas didáticas (exposição, discussão dirigida, etc).</td>
    <td><input type="radio" name="grupo2_perguntar8" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar8" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar8" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar8" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar8" value="5" required></td>
  </tr>
  <tr>
    <td><strong>9 - PONTUALIDADE</strong><br>Capacidade de utilizar o tempo disponível (comparecimento integral e cumprimento do horário previsto).</td>
    <td><input type="radio" name="grupo2_perguntar9" value="1" required></td>
    <td><input type="radio" name="grupo2_perguntar9" value="2" required></td>
    <td><input type="radio" name="grupo2_perguntar9" value="3" required></td>
    <td><input type="radio" name="grupo2_perguntar9" value="4" required></td>
    <td><input type="radio" name="grupo2_perguntar9" value="5" required></td>
  </tr>
  </tbody>
</table>
<p></p>

<h3>SUGESTÕES/CRÍTICAS</h3>
<textarea rows="4" cols="50" placeholder="Ex: NADA RELATAR" name="grupo2_sugestoes"></textarea>
<p></p>

<h3>Grupo 3 - Avaliação do Aluno (auto-avaliação)</h3>

<table table border=1 style="border-collapse: collapse">
  <thead>
  <tr>
     <th align="center">CONCEITOS</th>
     <th colspan="5" align="center">ESCALA</th>
  </tr>
  </thead>
  <tbody>
  <tr>
   <td>&nbsp;</td>
    <td align="center">(1)</td>
    <td align="center">(2)</td>
    <td align="center">(3)</td>
    <td align="center">(4)</td>
    <td align="center">(5)</td>
  </tr>
  <tr>
    <td><strong>1 - CONHECIMENTO ANTERIOR DO ASSUNTO</strong><br>Nível de conhecimento anterior do assunto ministrado.</td>
    <td><input type="radio" name="grupo3_perguntar1" value="1" required></td>
    <td><input type="radio" name="grupo3_perguntar1" value="2" required></td>
    <td><input type="radio" name="grupo3_perguntar1" value="3" required></td>
    <td><input type="radio" name="grupo3_perguntar1" value="4" required></td>
    <td><input type="radio" name="grupo3_perguntar1" value="5" required></td>
  </tr>
  <tr>
    <td><strong>2 - ASSIMILAÇÃO DO CONTEÚDO</strong><br>Nível de aprendizagem adquirido para o desempenho das funções na Área de Inteligência.</td>
    <td><input type="radio" name="grupo3_perguntar2" value="1" required></td>
    <td><input type="radio" name="grupo3_perguntar2" value="2" required></td>
    <td><input type="radio" name="grupo3_perguntar2" value="3" required></td>
    <td><input type="radio" name="grupo3_perguntar2" value="4" required></td>
    <td><input type="radio" name="grupo3_perguntar2" value="5" required></td>
  </tr>
  <tr>
    <td><strong>3 - PARTICIPAÇÃO</strong><br>Nível de participação individual durante a exposição do assunto.</td></strong></td>
    <td><input type="radio" name="grupo3_perguntar3" value="1" required></td>
    <td><input type="radio" name="grupo3_perguntar3" value="2" required></td>
    <td><input type="radio" name="grupo3_perguntar3" value="3" required></td>
    <td><input type="radio" name="grupo3_perguntar3" value="4" required></td>
    <td><input type="radio" name="grupo3_perguntar3" value="5" required></td>
  </tr>
  <tr>
    <td><strong>4 - RELACIONAMENTO INTERPESSOAL</strong><br>Nível de participação coletiva durante a exposição do assunto.</td>
    <td><input type="radio" name="grupo3_perguntar4" value="1" required></td>
    <td><input type="radio" name="grupo3_perguntar4" value="2" required></td>
    <td><input type="radio" name="grupo3_perguntar4" value="3" required></td>
    <td><input type="radio" name="grupo3_perguntar4" value="4" required></td>
    <td><input type="radio" name="grupo3_perguntar4" value="5" required></td>
  </tr>
  </tbody>
</table>

<p></p>
<h3>SUGESTÕES/CRÍTICAS</h3>
<textarea rows="4" cols="50" placeholder="Ex: NADA RELATAR" name="grupo3_sugestoes"></textarea>
<p>
<p align="center"><input type = "submit" id="enviar" class="btn btn-primary" value="Enviar"/></p>
</div>

</div>




<?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
          <?php endif; ?>
</div></div>










