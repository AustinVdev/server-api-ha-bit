<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ThemeSeeder extends Seeder
{
   use WithoutModelEvents;

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      DB::table('theme')->insert([
         'tittle' => 'Prussian Blue',
         'color_code' => '#13293D',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Shappire Blue',
         'color_code' => '#006494',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'CG Blue',
         'color_code' => '#247BA0',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Carolina Blue',
         'color_code' => '#1B98E0',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Alice Blue',
         'color_code' => '#E8F1F2',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Cornflower Blue',
         'color_code' => '#91A6FF',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Persian Pink',
         'color_code' => '#FF88DC',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Tart Orange',
         'color_code' => '#FF5154',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Turquiose Blue',
         'color_code' => '#4EFFEF',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Cadet Blue',
         'color_code' => '#73A6AD',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Cool Grey',
         'color_code' => '#9B97B2',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Pink Lavender',
         'color_code' => '#D8A7CA',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Amazon',
         'color_code' => '#4A7C59',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Orange',
         'color_code' => '#F77F00',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
      DB::table('theme')->insert([
         'tittle' => 'Sunglow',
         'color_code' => '#FFD046',
         'is_active' => true,
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
      ]);
   }
}
