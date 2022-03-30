<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class S_Aluno extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_aluno'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'nome_aluno'       => [
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

        $this->forge->addKey('id_aluno', true);

        // $this->forge->addForeignKey('id_curso', 'p_curso', 'id_curso', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_tratamento', 'p_tratamento', 'id_tratamento', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_posto', 'p_posto', 'id_posto', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_quadro', 'p_quadro', 'id_quadro', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_especialidade', 'p_especialidade', 'id_especialidade', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_om', 'p_om', 'id_om', 'CASCADE', 'CASCADE');
        // $this->forge->addForeignKey('id_situacao', 'p_situacao', 'id_situacao', 'CASCADE', 'CASCADE');


        $this->forge->createTable('s_aluno', false);

        $this->db->query("INSERT INTO `s_aluno` (`id_aluno`, `nome_aluno`, `cpf`, `id_curso`, `id_tratamento`, `id_posto`, `id_quadro`, `id_especialidade`, `id_om`, `id_situacao`, `id_user_tipo`, `saram`, `cod_aluno`, `password`, `created_at`, `updated_at`) VALUES (NULL, 'nome teste', '123456', '1', '1', '1', '1', '1', '1', '1', '1', '123456', '25252', '252555', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
    }

    public function down()
    {
        $this->forge->dropTable('s_aluno');
    }
}
