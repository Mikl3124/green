<?php

use App\Models\Pack;
use Illuminate\Database\Seeder;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pack::create([
            'id' => 1,
            'name' => 'Pack Permis',
            'price' => 159,
        ]);

        Pack::create([
            'id' => 2,
            'name' => 'Pack permis+',
            'price' => 189,
        ]);

        Pack::create([
            'id' => 3,
            'name' => 'Pack fin de travaux',
            'price' => 259,
        ]);
    }
}
