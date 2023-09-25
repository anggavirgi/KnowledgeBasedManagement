<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ComplainReply extends Migration
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
            'id_complain' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'description' => [
                'type'          => 'TEXT'
            ],
            'is_read' => [
                'type'      => 'INT',
                'default'   => 0
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
        $this->forge->createTable('complain_reply');
    }

    public function down()
    {
        $this->forge->dropTable('complain_reply');
    }
}
