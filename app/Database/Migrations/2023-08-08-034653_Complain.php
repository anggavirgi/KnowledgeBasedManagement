<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Complain extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'deskripsi' => [
                'type'       => 'TEXT',
            ],
            'file' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'reply' => [
                'type'       => 'TEXT',
            ],
            'reply_date' => [
                'type'       => 'DATETIME',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'visibility' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
                'default'    => 'closed'
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_user', 'users', 'id');
        $this->forge->createTable('complain');
    }

    public function down()
    {
        $this->forge->dropTable('complain');
    }
}
