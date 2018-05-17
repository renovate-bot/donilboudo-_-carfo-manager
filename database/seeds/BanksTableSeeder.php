<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'UBA',
            'description' => '',
            'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);

        DB::table('banks')->insert([
            'name' => 'ECOBANK',
            'description' => '',
            'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);

        DB::table('banks')->insert([
            'name' => 'BOA',
            'description' => '',
            'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);

        DB::table('banks')->insert([
            'name' => 'URCPC',
            'description' => '',
            'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
