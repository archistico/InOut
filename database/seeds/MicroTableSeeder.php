<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Micro;

class MicroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Micro::truncate();

        $sql = 'insert into micros (macro_id, description, created_at) values (:macro_id, :description, :created_at)';

        // LAVORO



        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Abitare',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Trasporto',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Sviluppo personale',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Salute',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Alimentari',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Divertimento',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Tasse e spese fisse',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Investimenti',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Comunicazione',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Abbigliamento e bellezza',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Regali',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Prestiti',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'macro_id' => 1,
            'description'=> 'Attrezzatura',
            'created_at' => Carbon::now()
        ]);
    }
}
