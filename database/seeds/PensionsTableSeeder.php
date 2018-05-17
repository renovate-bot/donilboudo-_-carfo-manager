<?php

use Illuminate\Database\Seeder;

class PensionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pensions')->insert([
            'type'          => 'PENSION_RETRAIRE',
            'group'         => '10',
            'sub_group'     => '1',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_RETRAIRE',
            'group'         => '10',
            'sub_group'     => '2',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_RETRAIRE',
            'group'         => '10',
            'sub_group'     => '3',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_RETRAIRE',
            'group'         => '10',
            'sub_group'     => '4',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_RETRAIRE',
            'group'         => '10',
            'sub_group'     => '5',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_REVERSION',
            'group'         => '15',
            'sub_group'     => '1',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_REVERSION',
            'group'         => '15',
            'sub_group'     => '2',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_REVERSION',
            'group'         => '15',
            'sub_group'     => '3',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_REVERSION',
            'group'         => '15',
            'sub_group'     => '4',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
        DB::table('pensions')->insert([
            'type'          => 'PENSION_REVERSION',
            'group'         => '15',
            'sub_group'     => '5',
            'created_at'    => NOW(),
        	'updated_at'    => NOW()
        ]);
    }
}
