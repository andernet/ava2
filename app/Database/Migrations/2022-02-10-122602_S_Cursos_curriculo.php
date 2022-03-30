<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class P_Cursos_curriculo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_curso_curriculo'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cursos_curriculo'       => [
                'type'       => 'text',
                //'constraint' => '250',
            ],
            'cursos_curriculo_carga'       => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'id_curso'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addKey('id_curso_curriculo', true);

        $this->forge->addForeignKey('id_curso', 'p_curso', 'id_curso');
        $this->forge->createTable('p_cursos_curriculo', false);
    }

    public function down()
    {
        $this->forge->dropTable('p_cursos_curriculo');
    }
}
