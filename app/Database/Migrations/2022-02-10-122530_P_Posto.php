<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class P_Posto extends Migration
{
    public function up()		 	
    {
        $this->forge->addField([
            'id_posto'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'hierarquia'       => [
                'type'       => 'INT',
                'constraint' => 2,
            ],
            'posto_sigla'       => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'posto_descricao'       => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
        ]);

        $this->forge->addKey('id_posto', true);
        $this->forge->createTable('p_posto', false);

        $this->db->query("INSERT INTO p_posto (hierarquia, posto_sigla, posto_descricao) VALUES ('1', 'MA', 'Marechal do Ar'), ('2', 'TB', 'Tenente Brigadeiro'), ('3', 'MB', 'Major Brigadeiro'), ('4', 'BR', 'Brigadeiro'), ('5', 'CL', 'Coronel'), ('6', 'TC', 'Tenente Coronel'), ('7', 'MJ', 'Major'), ('8', 'CP', 'Capitão'), ('9', '1T', '1º Tenente'), ('10', '2T', '2º Tenente'), ('11', 'AP', 'Aspirante a Oficial'), ('12', 'SO', 'Suboficial'), ('13', '1S', '1º Sargento'), ('14', '2S', '2º Sargento'), ('15', '3S', '3º Sargento'), ('16', 'CB', 'Cabo'), ('17', 'TM', 'Taifeiro Mor'), ('18', 'S1', 'Soldado de Primeira Classe'), ('19', 'T1', 'Taifeiro de Primeira Classe'), ('20', 'S2', 'Soldado de Segunda Classe'), ('21', 'T2', 'Taifeiro de Segunda Classe')");
    }

    public function down()
    {
        $this->forge->dropTable('p_posto');
    }
}


