<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class S_Pre_curso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pre_curso'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'cod_aluno'          => [
                'type'           => 'INT',
                'constraint'     => 15,
                'unsigned'       => true,
                'unique'     => true,
            ],
            'id_curso'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'conhecimento_deste_curso'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'conhecimento_deste_curso_outro' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'interesse' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'expectativa_conhecimentos' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'facilidades_dificuldades' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'aplicacao_conhecimentos' => [
                'type' => 'TEXT',
                'null' => true,
            ],


            'created_at datetime default current_timestamp',
    'updated_at datetime default current_timestamp on update current_timestamp',

        ]);


        $this->forge->addKey('id_pre_curso', true);
        
        $this->forge->addForeignKey('cod_aluno', 's_aluno', 'cod_aluno', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_curso', 'p_curso', 'id_curso', 'CASCADE', 'CASCADE');

        $this->forge->createTable('s_pre_curso', false);
        
    }

    public function down()
    {
        $this->forge->dropTable('s_pre_curso');
    }
}