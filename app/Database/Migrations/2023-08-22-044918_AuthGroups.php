<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthGroups extends Migration
{
    public function up()
    {
        $fields = [
            'id'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'        => ['type' => 'varchar', 'constraint' => 255],
            'description' => ['type' => 'varchar', 'constraint' => 255],
        ];

        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('auth_groups', true);
    }

    public function down()
    {
        $this->forge->dropTable('auth_groups', true);
    }
}
