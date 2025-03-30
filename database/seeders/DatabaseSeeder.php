<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //Admin Seeder
        User::create(
            [
                'first_name'    => 'Admin',
                'last_name'     => null,
                'email'         => 'admin@website.com',
                'email_verified_at' => now(),
                'password'      => 'Admin3@1',
                'phone'         => null,
                'is_admin'      => true,
            ]
        );

        //Setting Seeder
        $this->call(SettingSeeder::class);
        
    }
}
