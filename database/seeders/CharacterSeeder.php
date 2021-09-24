<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
            'name' => 'Pikachu',
            'year_creation' => '1993',
            'affiliate_name' => 'Pokemon',
            'designer' => 'Ken Sugimori',
            ]
        ]);
    }

    
}
