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
        $this->call(SubdivisionTableSeeder::class);
        $this->call(MacroTableSeeder::class);
        $this->call(MicroTableSeeder::class);
        $this->call(MiniTableSeeder::class);
        $this->call(OutTableSeeder::class);
    }
}
