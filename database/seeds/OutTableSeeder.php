<?php

use App\Out;
use Illuminate\Database\Seeder;

class OutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Out::truncate();

        factory(Out::class, 150)->create();
    }
}
