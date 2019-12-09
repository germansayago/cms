<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\Page::create([
            'parent_id' => null,
            'title' => 'Quienes Somos',
            'slug' => 'quienes-somos',
            'body' => 'Contenidos de quienes somos'
        ]);

        App\Page::create([
            'parent_id' => 1,
            'title' => 'Misión',
            'slug' => 'mision',
            'body' => 'Contenidos de misión'
        ]);

        App\Page::create([
            'parent_id' => 1,
            'title' => 'Visión',
            'slug' => 'vision',
            'body' => 'Contenidos de visión'
        ]);
    }
}
