<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class P_Curso_status extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_curso_status'    => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'status'            => [
                'type'          => 'INT',
                'constraint'    => 2,
            ],
            'status_descricao'       => [
                'type'       => 'VARCHAR',
                'constraint' => '11',
            ]
            
            ]);

        
        $this->forge->addKey('id_curso_status', true);
        $this->forge->createTable('p_curso_status', false);

      
        $this->db->query("INSERT INTO p_curso_status (status, status_descricao) VALUES ('1', 'INATIVO'), ('2', 'ATIVO')");
    }

    public function down()
    {
        $this->forge->dropTable('p_curso_status');
    }
}