<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class P_Ano extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ano'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'ano'       => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            
            ]);

        
        $this->forge->addKey('id_ano', true);
        $this->forge->createTable('p_ano', false);

      
        $this->db->query("INSERT INTO p_ano (ano) VALUES ('2021'), ('2022'), ('2023'), ('2024'), ('2025'), ('2026'), ('2027'), ('2028'), ('2029'), ('2030'), ('2031'), ('2032'), ('2033'), ('2034'), ('2035'), ('2036'), ('2037'), ('2038'), ('2039'), ('2040')");
    }

    public function down()
    {
        $this->forge->dropTable('p_ano');
    }
}
