<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class P_Curso_tipo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_curso_tipo'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'curso_tipo_sigla'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);

        $this->forge->addKey('id_curso_tipo', true);
        $this->forge->createTable('p_curso_tipo', false);

        $this->db->query("INSERT INTO p_curso_tipo (curso_tipo_sigla) VALUES ('EAD'), ('PRESENCIAL'), ('EAD / PRESENCIAL')");
    }

    public function down()
    {
        $this->forge->dropTable('p_curso_tipo');
    }
}
