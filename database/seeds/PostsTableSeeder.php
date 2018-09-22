<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Categorie;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 15;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->sentence(6),
                'description' => $faker->paragraph(5),
                'post_type' => $faker->randomElement(['formation', 'stage']),
                'prix' => $faker->numberBetween(600, 2600),
                'nbreleves' => $faker->numberBetween(0, 40),
                'datedebut' => $faker->dateTime('d/m/y', null),
                'datefin' => $faker->dateTime('d/m/y'),
            ]);
            DB::table('categories')->insert([
                'specialite' => $faker->randomElement(['front-end', 'back-end'])
            ]);
            Storage::disk('local')->delete(Storage::allFiles());

            factory(App\Post::class, 100)->create()->each(function ($post) {
                $link = str_random(12) . '.jpg';
                $file = file_get_contents('http://lorempicsum.com/futurama/250/250/' . rand(1, 9));
                Storage::disk('local')->put($link, $file);
                 $post->picture()->create([
                     'title' => 'Default',
                     'link' => $link,
                 ]);
                $categories = App\Categorie::pluck('id')->shuffle()->slice(0, rand(1, 3))->all();
                $post->categories()->attach($categories);
            });
        }

    /*
     * factory(App\Post::class)->create()->each(function ($post) {
            $categories = App\Categorie::collect(['php', 'ruby', 'java', 'javascript', 'bash'])
                ->random(2)
                ->pluck('id')
                ->values()
                ->shuffle()
                ->slice(0, rand(1, 3))
                ->all();
            $post->categories()->attach($categories);
        });
     */}
}

