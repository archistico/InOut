<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Subdivision;

class SubdivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Subdivision::truncate();

        $sql = 'insert into subdivisions (description, created_at) values (:description, :created_at)';
        DB::statement($sql, [
            'description'=> 'Entrata',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Uscita',
            'created_at' => Carbon::now()
        ]);
    }
}
