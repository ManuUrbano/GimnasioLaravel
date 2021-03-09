<?php

namespace Database\Seeders;

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
    
        $this->call(ActividadesSeeder::class);
        $this->call(RolsSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TramoSeeder::class);
        \App\Models\User::factory(10)->create();
    }
}
