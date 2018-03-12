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

        $sql = 'insert into macros (subdivision_id, description, created_at) values (:subdivision_id, :description, :created_at)';

        // ENTRATE

        DB::statement($sql, [
            'subdivision_id' => 1,
            'description'=> 'Lavoro',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'subdivision_id' => 1,
            'description'=> 'Hobbies',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'subdivision_id' => 1,
            'description'=> 'Famiglia',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'subdivision_id' => 1,
            'description'=> 'Amici',
            'created_at' => Carbon::now()
        ]);

        // USCITE

        DB::statement($sql, [
            'subdivision_id' => 2,
            'description'=> 'Personale',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'subdivision_id' => 2,
            'description'=> 'Lavoro',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'subdivision_id' => 2,
            'description'=> 'Famiglia',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'subdivision_id' => 2,
            'description'=> 'Amici',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'subdivision_id' => 2,
            'description'=> 'Animali',
            'created_at' => Carbon::now()
        ]);
    }
}
