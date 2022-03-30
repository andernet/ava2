<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class P_Certificado_tipo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_certificado_tipo'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'certificado_tipo_sigla'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
        ]);

        $this->forge->addKey('id_certificado_tipo', true);
        $this->forge->createTable('p_certificado_tipo', false);

        $this->db->query("INSERT INTO p_certificado_tipo (certificado_tipo_sigla) VALUES ('IMPRESSO'), ('DIGITAL')");
    }

    public function down()
    {
        $this->forge->dropTable('p_certificado_tipo');
    }
}
