<?php

use App\Match;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $rows = [
            [
                'squadra_casa' => 'CCCP 1987',
                'squadra_ospite' => 'TRastevere Calcio',
                'risultato' => rand(0, 10) . '-' . rand(0, 10),
                'rimborso' => 75,
                'citta' => 'Roma',
                'data' => '2023-01-21',
                'orario' => '15:00',
            ],[
                'squadra_casa' => 'Citta di Zagarolo',
                'squadra_ospite' => 'Albano',
                'risultato' => '5-7',
                'rimborso' => 86,
                'citta' => 'Zagarolo',
                'data' => '2023-01-14',
                'orario' => '15:30',
            ],[
                'squadra_casa' => 'Levante Roma',
                'squadra_ospite' => 'Technology C5',
                'risultato' => '2-5',
                'rimborso' => 75,
                'citta' => 'Roma',
                'data' => '2023-01-07',
                'orario' => '16:00',
            ]
        ];
        foreach ($rows as $row) {
            $match = new Match();
            $match->squadra_casa = $row['squadra_casa'];
            $match->squadra_ospite = $row['squadra_ospite'];['squadra_casa'];
            $match->risultato = $row['risultato'];
            $match->rimborso = $row['rimborso'];
            $match->citta = $row['citta'];
            $match->data = $row['data'];
            $match->orario = $row['orario'];
            $match->save();
        }

        for ($i = 0; $i < 150; $i++){
            $match = new Match();
            $match->squadra_casa = $faker->city();
            $match->squadra_ospite = $faker->city();
            $match->risultato = rand(0, 10) . '-' . rand(0, 10);
            $match->rimborso = $faker->randomElement([60, 66, 75, 86]);
            $match->citta = $match->squadra_casa = $faker->city();
            $match->data = $faker->dateTimeThisYear();
            $match->orario = $faker->randomElement(['15:00', '15:30', '18:00', '21:00']);
            $match->save();
        }
    }
}
