<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('tasks')->delete();
        $createTasks=[];
        $faker=Faker::create();
        foreach(range(1,5) as $index ){
            $createTasks[]=[
                'title'=>$faker->paragraph(),
                'description'=>$faker->realText(),
                'created_at'=>now(),
                'updated_at'=>now(),
            ];
        }
        DB::table('tasks')->insert($createTasks);
    }
}
