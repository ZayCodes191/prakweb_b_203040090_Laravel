<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'M. Anendha Zaska',
            'email' => '203040090@mail.unpas.ac.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Zay Naver Azrael',
            'email' => 'NaveriusBlade@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'web-programmig'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos magni iusto ad nemo voluptate aliquid similique porro, neque esse veritatis sequi animi voluptatem explicabo possimus rerum. Maxime nulla, fuga rerum culpa commodi, modi sed distinctio consequatur est velit quas! Dicta officiis voluptatum minima numquam nulla eum sapiente magnam doloribus provident quaerat earum dignissimos placeat itaque id iure nobis obcaecati repellendus esse molestiae, distinctio aut delectus atque dolorum. Maiores dolor velit iusto eveniet ratione cupiditate sit quidem excepturi ab nobis? Recusandae repellendus mollitia quisquam pariatur doloribus. Aperiam vero minus amet beatae animi quis consectetur expedita illo, laborum corporis voluptatum sed quam!',
            'category_id' => 1,
            'user_id' =>1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos magni iusto ad nemo voluptate aliquid similique porro, neque esse veritatis sequi animi voluptatem explicabo possimus rerum. Maxime nulla, fuga rerum culpa commodi, modi sed distinctio consequatur est velit quas! Dicta officiis voluptatum minima numquam nulla eum sapiente magnam doloribus provident quaerat earum dignissimos placeat itaque id iure nobis obcaecati repellendus esse molestiae, distinctio aut delectus atque dolorum. Maiores dolor velit iusto eveniet ratione cupiditate sit quidem excepturi ab nobis? Recusandae repellendus mollitia quisquam pariatur doloribus. Aperiam vero minus amet beatae animi quis consectetur expedita illo, laborum corporis voluptatum sed quam!',
            'category_id' => 1,
            'user_id' =>1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos magni iusto ad nemo voluptate aliquid similique porro, neque esse veritatis sequi animi voluptatem explicabo possimus rerum. Maxime nulla, fuga rerum culpa commodi, modi sed distinctio consequatur est velit quas! Dicta officiis voluptatum minima numquam nulla eum sapiente magnam doloribus provident quaerat earum dignissimos placeat itaque id iure nobis obcaecati repellendus esse molestiae, distinctio aut delectus atque dolorum. Maiores dolor velit iusto eveniet ratione cupiditate sit quidem excepturi ab nobis? Recusandae repellendus mollitia quisquam pariatur doloribus. Aperiam vero minus amet beatae animi quis consectetur expedita illo, laborum corporis voluptatum sed quam!',
            'category_id' => 2,
            'user_id' =>2
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos magni iusto ad nemo voluptate aliquid similique porro, neque esse veritatis sequi animi voluptatem explicabo possimus rerum. Maxime nulla, fuga rerum culpa commodi, modi sed distinctio consequatur est velit quas! Dicta officiis voluptatum minima numquam nulla eum sapiente magnam doloribus provident quaerat earum dignissimos placeat itaque id iure nobis obcaecati repellendus esse molestiae, distinctio aut delectus atque dolorum. Maiores dolor velit iusto eveniet ratione cupiditate sit quidem excepturi ab nobis? Recusandae repellendus mollitia quisquam pariatur doloribus. Aperiam vero minus amet beatae animi quis consectetur expedita illo, laborum corporis voluptatum sed quam!',
            'category_id' => 2,
            'user_id' =>2
        ]);

        
    }
}

// \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);