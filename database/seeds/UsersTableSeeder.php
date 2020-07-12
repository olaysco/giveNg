<?php

use App\Givetem;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the User table seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(
            ['email' => 'ola@mail.com']
        );
    }
}
