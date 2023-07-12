<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'product_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'slug' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
            'created_at' => [
                'type' => 'datetime'
            ],
            'updated_at' => [
                'type' => 'datetime'
            ]
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('product');
    }

    public function down()
    {
        $this->forge->dropTable('product');
    }
}
