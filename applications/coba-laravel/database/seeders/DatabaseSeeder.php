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

        User::factory(3)->create();

            Category::create([
                'name' => 'Web Programming',
                'slug' => 'web-programming',
            ]);
            
            Category::create([
                'name' => 'Web Desain',
                'slug' => 'web-design',
            ]);

            Category::create([
                'name' => 'Personal',
                'slug' => 'personal',
            ]);

            Post::factory(20)->create();

        //     Post::create([
        //         'title' => 'Judul Pertama',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //         'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A molestias odit voluptas dolorem, quae officiis, consectetur esse vitae sit repellat laboriosam! Nobis placeat error rem magni quibusdam facilis debitis, omnis nemo at, earum ullam impedit facere rerum mollitia reprehenderit maiores repellendus consequatur ab, quod unde. Ducimus doloribus incidunt ipsum commodi dolorum veritatis, quod eos sequi quas? Sapiente asperiores ad voluptas minima modi ratione est dicta, nostrum sunt sed sequi sint numquam id vel ipsam animi illo, unde consequuntur iste omnis aspernatur reprehenderit quasi. Sequi alias odio voluptatem corrupti, incidunt, consequuntur nobis repellat et fugit dolorem eaque temporibus distinctio quis. Iste!',
        //         'category_id' => 1,
        //         'user_id' => 1,
        //     ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A molestias odit voluptas dolorem, quae officiis, consectetur esse vitae sit repellat laboriosam! Nobis placeat error rem magni quibusdam facilis debitis, omnis nemo at, earum ullam impedit facere rerum mollitia reprehenderit maiores repellendus consequatur ab, quod unde. Ducimus doloribus incidunt ipsum commodi dolorum veritatis, quod eos sequi quas? Sapiente asperiores ad voluptas minima modi ratione est dicta, nostrum sunt sed sequi sint numquam id vel ipsam animi illo, unde consequuntur iste omnis aspernatur reprehenderit quasi. Sequi alias odio voluptatem corrupti, incidunt, consequuntur nobis repellat et fugit dolorem eaque temporibus distinctio quis. Iste!',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A molestias odit voluptas dolorem, quae officiis, consectetur esse vitae sit repellat laboriosam! Nobis placeat error rem magni quibusdam facilis debitis, omnis nemo at, earum ullam impedit facere rerum mollitia reprehenderit maiores repellendus consequatur ab, quod unde. Ducimus doloribus incidunt ipsum commodi dolorum veritatis, quod eos sequi quas? Sapiente asperiores ad voluptas minima modi ratione est dicta, nostrum sunt sed sequi sint numquam id vel ipsam animi illo, unde consequuntur iste omnis aspernatur reprehenderit quasi. Sequi alias odio voluptatem corrupti, incidunt, consequuntur nobis repellat et fugit dolorem eaque temporibus distinctio quis. Iste!',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. A molestias odit voluptas dolorem, quae officiis, consectetur esse vitae sit repellat laboriosam! Nobis placeat error rem magni quibusdam facilis debitis, omnis nemo at, earum ullam impedit facere rerum mollitia reprehenderit maiores repellendus consequatur ab, quod unde. Ducimus doloribus incidunt ipsum commodi dolorum veritatis, quod eos sequi quas? Sapiente asperiores ad voluptas minima modi ratione est dicta, nostrum sunt sed sequi sint numquam id vel ipsam animi illo, unde consequuntur iste omnis aspernatur reprehenderit quasi. Sequi alias odio voluptatem corrupti, incidunt, consequuntur nobis repellat et fugit dolorem eaque temporibus distinctio quis. Iste!',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);
    }
}