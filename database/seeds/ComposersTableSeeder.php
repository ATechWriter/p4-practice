<?php

use Illuminate\Database\Seeder;

class ComposersTableSeeder extends Seeder
{
    /**
     * Add three entries to the composers table
     *
     * @return void
     */
    public function run()
    {
        DB::table('composers')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'last_name' => 'Monteverdi',
            'first_name' => 'Claudio',
            'dates' => '1567-1643',
        ]);

        DB::table('composers')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'last_name' => 'Jones',
            'first_name' => 'Robert',
            'dates' => 'ca. 1577-1617',
        ]);

        DB::table('composers')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'last_name' => 'Sweelinck',
            'first_name' => 'Jan Pieterszoon',
            'dates' => '1562-1621',
        ]);

    }
}
