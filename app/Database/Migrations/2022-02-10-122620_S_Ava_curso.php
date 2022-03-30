<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class S_Ava_curso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ava_curso'          => [
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
            'mycheck'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'created_at datetime default current_timestamp',
    'updated_at datetime default current_timestamp on update current_timestamp',

        ]);

        $this->forge->addKey('id_ava_curso', true);
        
        $this->forge->addForeignKey('cod_aluno', 's_aluno', 'cod_aluno', 'CASCADE', 'CASCADE');

        $this->forge->createTable('s_ava_curso', false);
        
    }

    public function down()
    {
        $this->forge->dropTable('s_ava_curso');
    }
}