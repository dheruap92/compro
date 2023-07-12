<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'menu_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            "position" => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            "parent_id" => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0
            ],
            "link" => [
                'type' => 'varchar',
                'constraint' => 11,
                'default' => 0
            ],
            "link_tipe" => [
                'type' => 'enum',
                'constraint' => ['in','out'],
                'default' => "in"
            ],
            "keterangan" => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ]
        ]);
        $this->forge->addKey('menu_id',true);
        $this->forge->createTable('menu');
    }

    public function down()
    {
        $this->forge->dropTable('menu');
    }
}
