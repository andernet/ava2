<div class="container mt-5">
    <?php echo anchor(base_url('register'), 'Novo usuário', ['class' => 'btn btn-success mb-3']) ?>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id_user'] ?></td>
                <td><?php echo $user['user_nome'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['id_user_tipo'] ?></td>
                <td>
                    <?php echo anchor('user/edit/' . $user['id_user'], 'Editar', ['class' => 'btn btn-primary']) ?>
                        -
                    <?php echo anchor('user/delete/' . $user['id_user'], "<button type='button' class='btn btn-danger'>Excluir</button>", ['onclick' => 'return confirma()']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php echo $pager->links(); ?>
</div>