<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
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
        \App\Models\User::factory(10)->create();

        Listing::factory(6)->create();

        // Listing::create([
        //     'tittle' => 'LAravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'http://www.acme.com',
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas eius reiciendis itaque a beatae quisquam perferendis non velit obcaecati, aut, praesentium corrupti id voluptatem, soluta iure quaerat tempore dolorem? Dolores!'
        // ]);

        // Listing::create([
        //     'tittle' => 'LAravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'http://www.acme.com',
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas eius reiciendis itaque a beatae quisquam perferendis non velit obcaecati, aut, praesentium corrupti id voluptatem, soluta iure quaerat tempore dolorem? Dolores!'
        // ]);

        // Listing::create([
        //     'tittle' => 'LAravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'http://www.acme.com',
        //     'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas eius reiciendis itaque a beatae quisquam perferendis non velit obcaecati, aut, praesentium corrupti id voluptatem, soluta iure quaerat tempore dolorem? Dolores!'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
