<?php

use Illuminate\Database\Seeder;

class productlineseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\productline::class, 5)->create();
    }
}
