<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AchievementSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('achievement')->insert([
            'tittle' => 'Primer tarea',
            'description' => 'Realiza tu primer tarea ¡empieza una nueva vida!',
            'is_active' => true,
            'required_points' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('achievement')->insert([
            'tittle' => 'Realiza tu primer hábito',
            'description' => 'Empieza a formar hábitos en tu vida',
            'is_active' => true,
            'required_points' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('achievement')->insert([
            'tittle' => 'Termina todas tus tareas pendientes',
            'description' => 'Increible terminaste todos tus pendientes',
            'is_active' => true,
            'required_points' => 0,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('achievement')->insert([
            'tittle' => 'Completa 10 habitos positivos',
            'description' => 'Sigue adelante con los hábitos',
            'is_active' => true,
            'required_points' => 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('achievement')->insert([
            'tittle' => 'Completa 500 tareas',
            'description' => 'Increible 500 tareas ya completadas',
            'is_active' => true,
            'required_points' => 500,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('achievement')->insert([
            'tittle' => 'Completa 500 hábitos',
            'description' => 'Increible ya formaste en tu hábitos',
            'is_active' => true,
            'required_points' => 500,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
