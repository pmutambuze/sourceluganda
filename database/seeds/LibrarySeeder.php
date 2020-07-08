<?php

use Illuminate\Database\Seeder;
use App\Library;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Library::class, 25)->create();
    }
}
