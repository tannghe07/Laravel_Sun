<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $user = new User;
//        $user->first_name='admin';
//        $user->last_name='admin';
//        $user->username='admin';
//        $user->email='admin@gmail.com';
//        $user->password=bcrypt('admin');
//        $user->is_admin=1;
//        $user->is_active=1;
//        $user->save();

        User::factory()->count(10)->hasPosts(2)->create();
    }
}
