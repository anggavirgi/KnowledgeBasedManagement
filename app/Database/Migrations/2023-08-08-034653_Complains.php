<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Complains extends Migration
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
            'id_project' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'subject' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'description' => [
                'type'       => 'TEXT',
            ],
            'file' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'is_read' => [
                'type'      => 'INT',
                'default'   => 0
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
                'default'    => 'pending'
            ],
            'visibility' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
                'default'    => 'closed'
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '128',
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
        $this->forge->createTable('complains');
    }

    public function down()
    {
        $this->forge->dropTable('complains');
    }
}
