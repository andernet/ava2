
      <div class="wrapper row2">
      <div id="container" class="clear">
         <h2 align="center">DIVISÃO DE PLANEJAMENTO</h2>
         <h3 align="center">Ficha Crítica - Briefing de Inteligência</h3>
         <p></p>
         <form id="form2" name="form2" method="post" action="gravar_ficha.php"  enctype="multipart/form-data">
            <table table border=1 style="border-collapse: collapse">
               <tr>
                  <td>Evento:</td>
                  <!--<input type="text" name="evento" size="10" maxlength="20"  value="CBO" readonly="true">-->
                  <td>
                     <select name="curso" id="curso" required>
                        <option value="">Selecione...</option>
                        <?php
                           //while ( $dados_curso=mysqli_fetch_assoc($db_curso)) {
                           //echo "<option value='".$dados_curso['id_curso']."'>".$dados_curso['nome_curso']."</option>";
                           //}
                           ?>
                     </select>
                  </td>
               </tr>
            </table>

<p> A opinião de V. Sa. é importante para o aprimoramento de nosso Estágio. 
<p> Por favor, assinale a alternativa abaixo que, ao seu ver, melhor defina o briefing realizado, e/ou faça as observações que julgar necessárias.

<table class="demo">
	<thead>
	<tr>
		<th>Ficha Crítica</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>1- IMPORTÂNCIA DO ASSUNTO</td>
	</tr>
	<tr>
		<td> <input type="radio" name="impor_assunto" value="1" required/>a) É fundamental para a missão.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="impor_assunto" value="2" required/>b) Não se aplica diretamente à missão.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="impor_assunto" value="3" required/>c) É válido apenas como cultura geral.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="impor_assunto" value="4" required/>d) Não desperta interesse.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>2- CONHECIMENTO ANTERIOR DO ASSUNTO</td>
	</tr>
	<tr>
		<td> <input type="radio" name="ante_assunto" value="1" required/>a) Era completamente novo para mim.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="ante_assunto" value="2" required/>b) Conhecia superficialmente alguns tópicos.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="ante_assunto" value="3" required/>c) Já o conhecia, mas o briefing serviu para atualizá-lo.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="ante_assunto" value="4" required/>d) Estava atualizado.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>3- ASSIMILAÇÃO DO ASSUNTO</td>
	</tr>
	<tr>
		<td> <input type="radio" name="assi_assunto" value="1" required/>a) Assimilei completamente.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="assi_assunto" value="2" required/>b) Assimilei parcialmente, mas estou em condições de fixá-lo com o estudo das anotações.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="assi_assunto" value="3" required/>c) Não entendi algumas partes do assunto.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="assi_assunto" value="4" required/>d) Não entendi o assunto na sua totalidade.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>4- AJUDAS DE INSTRUÇÃO</td>
	</tr>
	<tr>
		<td> <input type="radio" name="ajuda_inst" value="1" required/>a) Foram bem utilizadas, facilitando a compreensão do assunto.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="ajuda_inst" value="2" required/>b) Foram utilizadas em demasia, tornando o briefing apenas uma leitura das ajudas.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="ajuda_inst" value="3" required/>c) Foram poucas utilizadas. Não influíram na compreensão do assunto.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="ajuda_inst" value="4" required/>d) Não foram utilizadas.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>5- TÉCNICA UTILIZADA NO BRIEFING</td>
	</tr>
	<tr>
		<td> <input type="radio" name="tec_briefing" value="1" required/>a) Foi adequada para se atingir o objetivo.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="tec_briefing" value="2" required/>b) O objetivo seria mais facilmente atingido se a técnica fosse outra.(Identificar a técnica em “Comentários”).</td>
	</tr>
	<tr>
		<td> <input type="radio" name="tec_briefing" value="3" required/>c) Deveria ser substituída, mas não sei identificar qual seria a técnica mais adequada.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>6- DURAÇÃO DO BRIEFING</td>
	</tr>
	<tr>
		<td> <input type="radio" name="duracao_briefing" value="1" required/>a) O tempo foi o suficiente para a apresentação do assunto.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="duracao_briefing" value="2" required/>b) O tempo foi insuficiente.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="duracao_briefing" value="3" required/>c) O briefing terminou no tempo previsto, mas a apresentação foi corrida.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="duracao_briefing" value="4" required/>d) O tempo foi insuficiente para a exploração do conteúdo previsto.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>7- NÍVEL DO BRIEFING</td>
	</tr>
	<tr>
		<td> <input type="radio" name="nivel_briefing" value="1" required/>a) O assunto foi apresentado em linguagem de entendimento comum.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="nivel_briefing" value="2" required/>b) O assunto foi apresentado em linguagem comum, porém com frases, termos e conceitos desconhecidos.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="nivel_briefing" value="3" required/>c) O Inst./Monit. teve de se reportar a assuntos fora do objetivo do briefing para se fazer entendido.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="nivel_briefing" value="4" required/>d) O assunto foi apresentado de linguagem elevada, de difícil entendimento.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>8- O BRIEFING CORRESPONDEU ÀS EXPECTATIVAS?</td>
	</tr>
	<tr>
		<td> <input type="radio" name="briefing_expec" value="1" required/>a) Sim.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="briefing_expec" value="2" required/>b) Não*.</td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>9- O BRIEFING SERÁ ÚTIL À MISSÃO?</td>
	</tr>
	<tr>
		<td> <input type="radio" name="briefing_missao" value="1" required/>a) Sim.</td>
	</tr>
	<tr>
		<td> <input type="radio" name="briefing_missao" value="2" required/>b) Não*.</td>
	</tr>

	<tbody>
</table>
<p align="center"><input type="submit" id="enviar" value="Enviar"></p>
      </div>
      <!-- Footer -->
      <div class="wrapper row3">
      <footer id="footer" class="clear">
      <p class="fl_left">DPL</p>
      </footer>
      </div>
      </form>
   </body>
</html>