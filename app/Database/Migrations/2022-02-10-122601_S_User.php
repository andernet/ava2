<?php

namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class S_User extends Migration
{
    public function up()		 	
    {
        $this->forge->addField([
            'id_user'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_nome'       => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'password'       => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'id_user_tipo'       => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'       => true,
            ],
            'created_at datetime default current_timestamp',
    'updated_at datetime default current_timestamp on update current_timestamp',
            //'created_at'       => [
              //  'type'           => 'DATETIME',
                //'default'        => 'CURRENT_TIMESTAMP',
           // ],
            //'updated_at'       => [
              //  'type'           => 'DATETIME',
                //'default'        => 'current_timestamp()',
            ]
    // ]
    );
        $data = [
            'user_nome' => '123456',
            'username' => '123456',
            'password' => '$2y$10$3kjq1C8ZuHH12.MoKGJBM.p3vFCE1SgTW5T7v5T7uFVT0UwFH9vti',
            'id_user_tipo' => '3',
            'created_at' => '0000-00-00 00:00:00',
            'updated_at' => '0000-00-00 00:00:00',
        ];

        $this->forge->addKey('id_user', true);


        $this->forge->addForeignKey('id_user_tipo', 'p_user_tipo', 'id_user_tipo');


        $this->forge->createTable('s_user', false);

        $this->db->query("INSERT INTO s_user (user_nome, username, password, id_user_tipo, created_at, updated_at) VALUES (:user_nome:, :username:, :password:, :id_user_tipo:, :created_at:, :updated_at:)", $data);

        //$this->db->table('users')->insert($data);

        
    }

    public function down()
    {
        $this->forge->dropTable('s_user');
    }

}