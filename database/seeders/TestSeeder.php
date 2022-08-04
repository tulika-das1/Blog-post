<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('blog_posts')->insert([
            // 'title' => 'Mr. Santu Das',
            // 'description' => 'hiiiiiiii murgichor',
            'title' => $faker->title,
            'description' => $faker->text,
        ]);
    }
}
