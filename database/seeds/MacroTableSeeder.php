<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Macro;

class MacroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Macro::truncate();

        $sql = 'insert into macros (description, created_at) values (:description, :created_at)';
        DB::statement($sql, [
            'description'=> 'Personale',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Lavoro',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Famiglia',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Amici',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Animali',
            'created_at' => Carbon::now()
        ]);
    }
}
