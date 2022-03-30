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
        <meta charset=utf-8" />
        <title>Gerador de Certificados</title>
    </head>
    <style>
    body {
        background-image: url("img/fundo.jpg") no - repeat;
        background-position: center;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    font-size: 20px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
        </style>
        <body>
        <h2 align = "center">CURSO B&Aacute;SICO DE INTELIG&Ecirc;NCIA -TURMA 1</h2>
        <h1 align = "center">CONTE&Uacute;DO CURRICULAR</h1>
        <div align = "center">
        <table width = "900" border = "1" >
        <tr>
        <th width = "900" align = "center">DISCIPLINA</th>
        <th width = "900" align = "center">CARGA HOR&Aacute;RIA</th>
        </tr>';

         <?php foreach ($dados as $dado) : ?>
            <tr>
                <td><?php echo $dado['cursos_curriculo'] ?></td>
                <td><?php echo $dado['cursos_curriculo_carga'] ?></td>
            </tr>
        <?php endforeach; ?>
</table>
        </div>
        </body>
        </html>';