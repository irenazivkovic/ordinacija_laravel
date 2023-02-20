<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZubarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zubars')->insert([
            'ime' => 'Mika',
            'prezime' => 'Zikic',
            'kategorija' => 'hirurgija',
        ]);
    }
}
