<div class="container mt-5">
    <?php echo anchor(base_url('/AlunoController/cad_aluno'), 'Novo aluno', ['class' => 'btn btn-success mb-3']) ?>
    <table class="table" id="tbaluno">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>CPF</th>
            <th>Curso</th>
            <th>OM</th>
            <th>Situação</th>
            <th>saram</th>
            <th>Cod aluno</th>
            <th>Cod verificacao</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>

        <?php
        if(isset($aluno)){ 
        foreach ($aluno as $dados) : ?>
            <tr>
                <td><?php echo $dados['id_user'] ?></td>
                <td><?php echo $dados['username'] ?></td>
                <td><?php echo $dados['tratamento'].' '.$dados['quadro'].' '.$dados['posto_sigla'].' '.$dados['especialidade'].' '.$dados['nome'] ?></td>
                <td><?php echo $dados['cpf'] ?></td>
                <td><?php echo $dados['curso_sigla'] ?></td>
                <td><?php echo $dados['om_sigla'] ?></td>
                <td><?php echo $dados['situacao'] ?></td>
                <td><?php echo $dados['saram'] ?></td>
                <td><?php echo $dados['cod_aluno'] ?></td>
                <td><?php echo $dados['cod_verificacao'] ?></td>
                <td>
                    <?php echo anchor('AlunoController/edit/' . $dados['id_user'], 'Editar', ['class' => 'btn btn-primary']) ?>
                        -
                    <?php echo anchor('AlunoController/delete/' . $dados['id_user'], "<button type='button' class='btn btn-danger'>Excluir</button>", ['onclick' => 'return confirma()']) ?>
                        -

                    <?php //echo anchor('CertificadoController/geraCertificado/' . $dados['cod_aluno'], 'Gerar', ['class' => 'btn btn-info', 'target'=>'_blank', 'onclick' => 'return gerar()']) 
                    echo '-' ?>
                    <?php echo anchor('CertificadoController/geraCodigo/' . $dados['cod_aluno'], 'Gerar', ['class' => 'btn btn-info']) ?>
                    -

                    <?php echo anchor('CertificadoController/select_certificado/' . $dados['id_user'], 'Certificado', ['class' => 'btn btn-warning', 'target'=>'_blank']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr><td> Nao existe alunos </td></tr>

<?php    }?>

    </tfoot>
    </table>
    <?php //echo $pager->links(); ?>
</div>