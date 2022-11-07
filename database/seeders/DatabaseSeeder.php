<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Muhammad Fathur Rochman',
            'username' => 'fathurrochman',
            'email' => 'faturomann@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Muhammad Fathur Rochim',
        //     'email' => 'fathurrochim@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Labore adipisci necessitatibus nostrum fugit voluptatem quas, at tempora eius sint, vitae, dolor provident nisi praesentium quam ipsam! Dicta itaque ducimus numquam nobis harum vero dolorem fugiat tenetur non fugit! Maiores quia sunt voluptatem deleniti quos perspiciatis temporibus a numquam perferendis cum',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Labore adipisci necessitatibus nostrum fugit voluptatem quas, at tempora eius sint, vitae, dolor provident nisi praesentium quam ipsam! Dicta itaque ducimus numquam nobis harum vero dolorem fugiat tenetur non fugit! Maiores quia sunt voluptatem deleniti quos perspiciatis temporibus a numquam perferendis cum',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Labore adipisci necessitatibus nostrum fugit voluptatem quas, at tempora eius sint, vitae, dolor provident nisi praesentium quam ipsam! Dicta itaque ducimus numquam nobis harum vero dolorem fugiat tenetur non fugit! Maiores quia sunt voluptatem deleniti quos perspiciatis temporibus a numquam perferendis cum',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
