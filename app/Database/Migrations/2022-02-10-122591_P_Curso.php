<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class P_Curso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_curso'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'curso_sigla'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'curso_descricao'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'curso_periodo'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'id_curso_status'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'id_curso_tipo'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ]
        ]);

        $this->forge->addKey('id_curso', true);

        $this->forge->addForeignKey('id_curso_status', 'p_curso_status', 'id_curso_status', 'CASCADE', 'CASCADE');
        
        $this->forge->addForeignKey('id_curso_tipo', 'p_curso_tipo', 'id_curso_tipo', 'CASCADE', 'CASCADE');


        $this->forge->createTable('p_curso', false);

        

        $this->db->query("INSERT INTO p_curso (curso_sigla, curso_descricao, id_curso_status, id_curso_tipo) VALUES ('CBI', 'Curso Básico de Inteligência 2022', '1', '1'), ('CTIC', 'Curso para Tratamento de Informações Classificadas', '1', '1'), ('CAI', 'Curso de Análise de Inteligência', '1', '1'), ('CBI-OF', 'Curso Básico de Inteligência para Oficiais', '1', '1'), ('CBI-GD', 'Curso Básico de Inteligência para Graduados', '1', '1'), ('CAVI-OF', 'Curso Avançado de Inteligência para Oficiais', '1', '1'), ('CAVI-GD', 'Curso Avançado de Inteligência para Graduados', '1', '1'), ('CBOI', 'Curso Básico de Operações', '1', '1')");
    }

    public function down()
    {
        $this->forge->dropTable('p_curso');
    }
}