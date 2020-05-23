<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tasks')->delete();

    	DB::table('tasks')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'title' => 'Like Getidon project on GitHub',
                'is_done' => 0
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'title' => 'Fork Getidon project on GitHub',
                'is_done' => 0
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'title' => 'Share Getidon project',
                'is_done' => 0
            ],
    	]);
    }
}
