<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class S_User extends Migration
{
    public function up()		 	
    {
        $this->forge->addField([
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'nome'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'cpf'       => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ],
            'id_curso'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'id_tratamento'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'id_posto'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'id_quadro'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'id_especialidade'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'id_om'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'id_situacao'    => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'id_user_tipo'    => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'saram'       => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'cod_aluno'       => [
                'type'       => 'INT',
                'constraint' => 15,
                'unsigned'       => true,
                'unique'     => true,
            ],
            'password'       => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'created_at datetime default current_timestamp',
    'updated_at datetime default current_timestamp on update current_timestamp',
            ]);

        
        $this->forge->addKey('id_user', true);


        $this->forge->addForeignKey('id_user_tipo', 'p_user_tipo', 'id_user_tipo');


        $this->forge->createTable('s_user', false);

        
        $this->db->query("INSERT INTO `s_user` (`id_user`, `username`, `nome`, `cpf`, `id_curso`, `id_tratamento`, `id_posto`, `id_quadro`, `id_especialidade`, `id_om`, `id_situacao`, `id_user_tipo`, `saram`, `cod_aluno`, `password`, `created_at`, `updated_at`) VALUES (NULL, 'admin', 'Administrador', '123456789', '1', '1', '1', '1', '1', '1', '1', '1', '123456', '123456789', '$2y$10$3kjq1C8ZuHH12.MoKGJBM.p3vFCE1SgTW5T7v5T7uFVT0UwFH9vti', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP); ");

        $this->db->query("INSERT INTO `s_user` (`id_user`, `username`, `nome`, `cpf`, `id_curso`, `id_tratamento`, `id_posto`, `id_quadro`, `id_especialidade`, `id_om`, `id_situacao`, `id_user_tipo`, `saram`, `cod_aluno`, `password`, `created_at`, `updated_at`) VALUES (NULL, 'aluno', 'Aluno', '123456789', '1', '1', '1', '1', '1', '1', '1', '3', '123456', '9876543', '$2y$10$3kjq1C8ZuHH12.MoKGJBM.p3vFCE1SgTW5T7v5T7uFVT0UwFH9vti', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP); ");
        
    }

    public function down()
    {
        $this->forge->dropTable('s_user');
    }

}



// $data = [
//             'situacao' => 'REPROVADO',
//         ];

//         $data1 = [
//             'situacao' => 'APROVADO',
//         ];
//         $this->forge->addKey('id_situacao', true);
//         $this->forge->createTable('p_situacao', false);

//         $this->db->query("INSERT INTO p_situacao (situacao) VALUES (:situacao:)", $data);
//         $this->db->query("INSERT INTO p_situacao (situacao) VALUES (:situacao:)", $data1);




        // $this->db->query("INSERT INTO s_user (user_nome, username, password, id_user_tipo, created_at, updated_at) VALUES (:user_nome:, :username:, :password:, :id_user_tipo:, :created_at:, :updated_at:)", $data);


//:username:, :nome:, :cpf:, :id_curso:, :id_tratamento:, :id_posto:, :id_quadro:, :id_especialidade:, :id_om:, :id_situacao:, :id_user_tipo:,  :saram:, :cod_aluno:, :password: