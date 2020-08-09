<?php

use App\Givetem;
use Illuminate\Database\Seeder;

class GivetemTableSeeder extends Seeder
{

    /**
     * Seed the Givetem Table
     *
     * @return void
     */
    public function run(): void
    {
        factory(Givetem::class, 100)
            ->create();
    }
}
