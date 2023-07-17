<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserGroupSeeder extends Seeder
{
    public function run()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('auth_groups');
        $data = [
            [
                "name" => "superadmin",
                "description" => "login super administrator"
            ],
            [
                "name" => "admin",
                "description" => "login admin"
            ],
            [
                "name" => "guest",
                "description" => "login guest"
            ],
            [
                "name" => "member",
                "description" => "login member"
            ],
        ];
        $builder->insertBatch($data);
    }
}
