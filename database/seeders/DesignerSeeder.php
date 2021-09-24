<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designers')->insert([
            [
            'name' => 'Ken Sugimori',
            'birth' => 1993,
            'nationality' => 'japonais',
            
            ]
        ]);
    }
}
