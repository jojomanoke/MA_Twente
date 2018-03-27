<?php

use Illuminate\Database\Seeder;

class ErrorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('errors_priority')->insert([
           [
               'id' => 1,
               'name' => 'Nu afhandelen',
               'code' => 'Rood',
           ],
            [
                'id' => 2,
                'name' => 'Urgent',
                'code' => 'Oranje',
            ],
            [
                'id' => 3,
                'name' => 'Afhandelen',
                'code' => 'Geel',
            ],
            [
                'id' => 4,
                'name' => 'Wacht',
                'code' => 'Grijs',
            ],
            [
                'id' => 5,
                'name' => 'Geen',
                'code' => 'Groen',
            ],
        ]);

        DB::table('errors_status')->insert([
            [
                'id' => 1,
                'name' => 'In afwachting',
            ],
            [
                'id' => 2,
                'name' => 'Bezig',
            ],
            [
                'id' => 3,
                'name' => 'Klaar',
            ],
        ]);

    }
}
