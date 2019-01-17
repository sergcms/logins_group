<?php

use App\Seo;
use App\User;
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
        // $this->call(UsersTableSeeder::class);
        
        Seo::create([
            'url' => '/',
            'title' => 'title default',
            'keywords' => 'keywords default',
            'description' => 'description default',
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234567'),
        ]);
    }
}
