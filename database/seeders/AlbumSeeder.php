<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Author;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::factory(10)->create();
    }
}
