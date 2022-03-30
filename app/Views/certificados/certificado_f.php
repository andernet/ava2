<?php
// echo '<pre>';
// // mostra todos os indíces possíveis para a matriz de variáveis

// print_r(get_defined_vars());
// echo '</pre>';


// dd();
?>
	<!DOCTYPE html>
	 <html> 
	 <head>
        <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
        <title>Gerador de Certificados</title>
        <!--<link href = "css/stylesheet.css" media = "screen" rel = "stylesheet" type = "text/css" />-->
    </head>
    <style>
        body{
            font-family: "Times New Roman", Times, serif;
            background-image: url("/img/dom.png") no-repeat;
            background-position: center;
            background-image-resolution:300dpi;
            background-image-resize:6;
        }
        h1 {
            font-size: 22px;
		text-align: center;
        }
        h2 {
            font-size: 30px;
        }
        h6 {
            font-size: 40px;
        }
        h4 {
            font-size: 10px;
            text-transform: uppercase;
        }
        th {
            font-size: 10px;
        }
    </style>
    <body>


          
                   <div align = "center">
            <table width = "900" border = "0" align="center">
                <tr>
                    <td align = "center"><h1>MINIST&Eacute;RIO DA DEFESA</h1></td>
                </tr>
                <tr>
                    <td align = "center"><h1>COMANDO DA AERON&Aacute;UTICA</h1></td>
                </tr>
                <tr>
                    <td align = "center"><h1>CENTRO DE INTELIG&Ecirc;NCIA DA AERON&Aacute;UTICA</h1></td>
                </tr>
                <tr>
                    <td align = "center">&nbsp;</td>
                </tr>
                <tr>
                    <td align = "center"><h6>CERTIFICADO</h6></td>
                </tr>
                <tr>
                    <td align = "center">Certifico que <?= $dados->tratamento ?></td>
                </tr>
            </table>
            <table width = "900" border = "0" >
                <tr>
                    <td align = "center"><h2><b><?= $dados->posto_sigla ?> <?= $dados->especialidade ?> <?= $dados->nome_aluno ?></b></h2></td>
                </tr>
                <tr>
                    <td align = "center">concluiu, com aproveitamento, o <?= '<b>'.$dados->curso_sigla.'</b>'?>, 
                    realizado pelo Centro de Intelig&ecirc;ncia da Aeron&aacute;utica, no período de <?= $dados->curso_periodo ?></td>
                </tr>
                <tr>
		        <td align = "left"><h4>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Código de verificação - <?= $dados->cod_verificacao ?></h4> </td>
		        </tr>
                </table>
		</div>
            <table border = "0" align= "right">
                <tr>
                    <td align = "center">&nbsp;</td>
                </tr>
                <tr>
                    <td align = "center">&nbsp;</td>
                </tr>
		<tr>
                    <th>Brig Ar RODRIGO GIBIN DUARTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>
                <tr>
                    <th>CHEFE DO CIAER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>                
            </table>
        </div>
    </body>
</html>

