<?php

use Illuminate\Database\Seeder;

class customerseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\customer::class, 5)->create();
    }
}
