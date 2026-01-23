<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  atraves de uma array
        $users2 =
            [
                [
                    'username' => 'usuarios',
                    'password' => 'senhas',
                ],
                [
                    'username' => 'usuarios',
                    'password' => 'senhas',
                ],
                [
                    'username' => 'usuarios',
                    'password' => 'senhas',
                ],
            ];
        DB::table('users2')->insert($users2);
    }
}
