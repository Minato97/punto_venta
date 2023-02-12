<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'username'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123456'),
                'roles_id'=>1
            ]
        ];
        DB::table('users')->insert($data);
    }
}
