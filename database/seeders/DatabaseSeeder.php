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
        //below commands will simply go to the respective factories like UserFactory and PostFactory and runn the commands there simply
        
        // User::factory()->create();
        // Post::factory()->create();

        //but if you wanna overwrite something like i only want to make one user with specific name and 
        //other data as the faker library inject into the fields randomly.
        //and multiple post assigned to that user then below
        //commands will work for you

        $user = User::factory()->create([
            'name' => "Farhan Siddique"
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

    }
}
