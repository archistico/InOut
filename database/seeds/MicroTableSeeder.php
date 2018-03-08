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

        $sql = 'insert into micros (description, created_at) values (:description, :created_at)';
        DB::statement($sql, [
            'description'=> 'Abitare',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Trasporto',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Sviluppo personale',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Salute',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Alimentari',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Divertimento',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Tasse e spese fisse',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Investimenti',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Comunicazione',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Abbigliamento e bellezza',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Regali',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Prestiti',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'description'=> 'Attrezzatura',
            'created_at' => Carbon::now()
        ]);
    }
}
