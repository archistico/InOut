<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Mini;

class MiniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Mini::truncate();

        $sql = 'insert into minis (micro_id, description, created_at) values (:micro_id, :description, :created_at)';

        // ABITARE

        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Acqua',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Gas',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Elettricità',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Affitto',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Albergo',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Casalinghi',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Elettrodomestici',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Spese condominiali',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Arredo',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Giardino',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Manutenzione',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Bagno',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Cucina',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Camera',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Garage',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 1,
            'description'=> 'Arte',
            'created_at' => Carbon::now()
        ]);

        // TRASPORTO

        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Auto - acquisto',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Auto - rata',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Auto - meccanico',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Auto - carburante',
            'created_at' => Carbon::now()
        ]);

        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Moto - acquisto',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Moto - rata',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Moto - meccanico',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Moto - carburante',
            'created_at' => Carbon::now()
        ]);

        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Treno',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Nave',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Aereo',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Bus',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Taxi',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Bicicletta',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Car sharing',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Poste',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 2,
            'description'=> 'Corriere',
            'created_at' => Carbon::now()
        ]);


        // SVILUPPO PERSONALE

        DB::statement($sql, [
            'micro_id' => 3,
            'description'=> 'Libri',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 3,
            'description'=> 'Cinema',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 3,
            'description'=> 'Film',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 3,
            'description'=> 'Abbonamenti',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 3,
            'description'=> 'Corsi',
            'created_at' => Carbon::now()
        ]);

        DB::statement($sql, [
            'micro_id' => 3,
            'description'=> 'Concerti',
            'created_at' => Carbon::now()
        ]);

        // SALUTE

        DB::statement($sql, [
            'micro_id' => 4,
            'description'=> 'Dottore',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 4,
            'description'=> 'Farmaci',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 4,
            'description'=> 'Ospedale',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 4,
            'description'=> 'Specialisti',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 4,
            'description'=> 'Palestra',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 4,
            'description'=> 'Attrezzi - strumenti',
            'created_at' => Carbon::now()
        ]);

        // ALIMENTARI

        DB::statement($sql, [
            'micro_id' => 5,
            'description'=> 'Cibo',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 5,
            'description'=> 'Ristorante',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 5,
            'description'=> 'Bar',
            'created_at' => Carbon::now()
        ]);

        // DIVERTIMENTO

        DB::statement($sql, [
            'micro_id' => 6,
            'description'=> 'Vacanze',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 6,
            'description'=> 'Gite fuori porta',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 6,
            'description'=> 'Altro',
            'created_at' => Carbon::now()
        ]);

        // TASSE

        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Pensione',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Commercialista',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Bolli',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Banca',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Commissioni',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'IRPEF',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Ordine professionale',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Revisione',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Registro',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Diritti di segreteria',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'IVA',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 8,
            'description'=> 'Assicurazione',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 7,
            'description'=> 'Altro',
            'created_at' => Carbon::now()
        ]);

        // INVESTIMENTI

        DB::statement($sql, [
            'micro_id' => 8,
            'description'=> 'Azioni',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 8,
            'description'=> 'Criptovalute',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 8,
            'description'=> 'Fondi investimento',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 8,
            'description'=> 'Polizze',
            'created_at' => Carbon::now()
        ]);

        // COMUNICAZIONE

        DB::statement($sql, [
            'micro_id' => 9,
            'description'=> 'Telefono fisso',
            'created_at' => Carbon::now()
        ]);

        DB::statement($sql, [
            'micro_id' => 9,
            'description'=> 'Portatile',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 9,
            'description'=> 'Internet',
            'created_at' => Carbon::now()
        ]);

        // ABBIGLIAMENTO

        DB::statement($sql, [
            'micro_id' => 10,
            'description'=> 'Estivo',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 10,
            'description'=> 'Invernale',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 10,
            'description'=> 'Scarpe',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 10,
            'description'=> 'Capelli',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 10,
            'description'=> 'Trucchi',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 10,
            'description'=> 'Altro',
            'created_at' => Carbon::now()
        ]);

        // REGALI

        DB::statement($sql, [
            'micro_id' => 11,
            'description'=> 'Generico',
            'created_at' => Carbon::now()
        ]);

        // PRESTITI

        DB::statement($sql, [
            'micro_id' => 12,
            'description'=> 'Generico',
            'created_at' => Carbon::now()
        ]);

        // ATTREZZATURA

        DB::statement($sql, [
            'micro_id' => 13,
            'description'=> 'Hardware',
            'created_at' => Carbon::now()
        ]);
        DB::statement($sql, [
            'micro_id' => 13,
            'description'=> 'Software',
            'created_at' => Carbon::now()
        ]);

    }
}
