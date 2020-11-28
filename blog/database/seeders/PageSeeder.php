<?php

namespace Database\Seeders;

use App\Models\Page;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Psy\Util\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageTitles = ['About', 'Extra'];
        $faker = Factory::create();
        $order = 0;

        foreach ($pageTitles as $title) {
            $order++;
            Page::insert([
                'title'=> $title,
                'slug'=> \Illuminate\Support\Str::slug($title),
                'content'=>$faker->realText(500),
                'order' => $order,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
    }
    }
}
