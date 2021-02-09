<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{

    private function randDate()
    {
        return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }

    public function run()
    {
        DB::table('reclamations')->delete();

        for ($i = 0; $i < 100; ++$i) {
            $date = $this->randDate();
            DB::table('reclamations')->insert([
                'matiere' => 'matiere' . $i,
                'commentaire' => 'commentaire' . $i . ' Lorem imollit anim id est laborum.',
                'user_id' => rand(1, 10),
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }
    }
}
