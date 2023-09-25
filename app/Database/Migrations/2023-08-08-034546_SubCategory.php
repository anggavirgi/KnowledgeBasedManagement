<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SubCategory extends Migration
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
            'name_subcategory' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
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
        $this->forge->createTable('sub_category');
    }

    public function down()
    {
        $this->forge->dropTable('sub_category');
    }
}
