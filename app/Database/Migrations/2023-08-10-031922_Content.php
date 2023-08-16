<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Content extends Migration
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
            'id_category' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_sub_category' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'content' => [
                'type'       => 'LONGTEXT',
            ],
            'good_insight' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0
            ],
            'bad_insight' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0
            ],
            'visibility' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
                'defaul'    => 'closed'
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
        $this->forge->addForeignKey('id_category', 'categories', 'id');
        $this->forge->addForeignKey('id_sub_category', 'sub_category', 'id');
        $this->forge->createTable('content');
    }

    public function down()
    {
        $this->forge->dropTable('content');
    }
}
