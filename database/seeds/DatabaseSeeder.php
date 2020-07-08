<?php

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
        $this->call(UsersSeeder::class);
        $this->call(LibrarySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(JournalSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(SubscriptionplanSeeder::class);
        $this->call(FeatureSeeder::class);
    }
}
