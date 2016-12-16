<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ComposersTableSeeder::class);
        $this->call(PiecesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
