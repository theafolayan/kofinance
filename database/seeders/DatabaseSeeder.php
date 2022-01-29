<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Prophecy\Argument\Token\ApproximateValueToken;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Oluwaseun Afolayan',
            'email' => 'theafolayan@gmail.com',
            'is_admin' => true,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            ]
        );
        \App\Models\User::factory(10)->create();
    }
}
