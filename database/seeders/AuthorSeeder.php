<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory(10)
            ->create()
            ->each(function ($author) {
                Album::factory(3)
                    ->create(
                        ['author_id' => $author->id]
                    );
            });
    }
}
