<?php

use Illuminate\Database\Seeder;
use todoparrot\Todolist;

class TodolistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todolist::truncate();
        factory(Todolist::class,20)->create();
    }
}
