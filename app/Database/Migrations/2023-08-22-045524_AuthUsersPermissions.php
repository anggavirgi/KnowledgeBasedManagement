<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AuthUsersPermissions extends Migration
{
    public function up()
    {
        $fields = [
            'user_id'       => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'default' => 0],
            'permission_id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'default' => 0],
        ];

        $this->forge->addField($fields);
        $this->forge->addKey(['user_id', 'permission_id']);
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('permission_id', 'auth_permissions', 'id', '', 'CASCADE');
        $this->forge->createTable('auth_users_permissions', true);
    }

    public function down()
    {
        $this->forge->dropTable('auth_users_permissions', true);
    }
}
