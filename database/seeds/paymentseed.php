<?php

use Illuminate\Database\Seeder;

class paymentseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\payment::class, 5)->create();
    }
}