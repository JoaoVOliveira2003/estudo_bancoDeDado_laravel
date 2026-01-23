<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class seed3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $users2 = [];
        for ($i = 0; $i < 10; $i++) {
            $users2[] = [
                'username' => $i . Str::random(5),
                'password' => 'senhas' . $i,
                'active' => (bool) rand(0, 1)
            ];
        }

        DB::table('users2')->insert($users2);

    }
}
