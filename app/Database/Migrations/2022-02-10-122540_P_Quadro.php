<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class P_Quadro extends Migration
{
    public function up()		 	
    {
        $this->forge->addField([
            'id_quadro'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'quadro'       => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
        ]);

        $this->forge->addKey('id_quadro', true);
        $this->forge->createTable('p_quadro', false);

         $this->db->query("INSERT INTO p_quadro (quadro) VALUES ('QOAV'),('QOINT'),('QOINF'),('QOENG'),('QOMED'),('QODENT'),('QOFARM'),('QOAP'),('QSCON'),('QTA (*)'),('QOECTA'),('QOEAV'),('QOEFOT'),('QOEMET'),('QOESUP'),('QOEARM'),('QOCON'),('QOE'),('QOECOM'),('QTA'),('QFO'),('QOEA'),('QFG'),('QCB'),('QUESA'),('QSS'),('QCOA'),('QSD')");
    }

    public function down()
    {
        $this->forge->dropTable('p_quadro');
    }
}


