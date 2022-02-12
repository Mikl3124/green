<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('packs')->insert([
        'id' => 1,
        'name' => 'Pack Permis',
        'price' => 159,
    ]);
      DB::table('packs')->insert([
        'id' => 2,
        'name' => 'Pack Permis +',
        'price' => 189,
    ]);
      DB::table('packs')->insert([
        'id' => 3,
        'name' => 'Pack Fin de Travaux',
        'price' => 259,
    ]);
  }
}
