<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('etudiants')->delete();

        for ($i = 0; $i < 10; ++$i) {
            DB::table('etudiants')->insert([
                'nom' => 'Nom' . $i,
                'prenom' => 'Prenom' . $i,
                'email' => 'email' . $i . '@gmail.com',
                'password' => bcrypt('password' . $i)

            ]);
        }
    }
}
