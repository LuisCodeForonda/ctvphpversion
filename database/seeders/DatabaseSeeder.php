<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolSeeder::class);
        User::factory()->create([
            'name' => 'luis alberto foronda condori',
            'email' => 'slushiiforonda@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');
       
        User::factory(20)->create();
    }
}
