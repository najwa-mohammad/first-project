<?php

use Illuminate\Database\Seeder;

class orderseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\order::class, 5)->create();
    }
}
