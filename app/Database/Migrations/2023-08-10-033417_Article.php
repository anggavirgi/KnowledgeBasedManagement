<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Article extends Migration
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
            'id_content' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_project' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
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
        $this->forge->createTable('article');
    }

    public function down()
    {
        $this->forge->dropTable('article');
    }
}
