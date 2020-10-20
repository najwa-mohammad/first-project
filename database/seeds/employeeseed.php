<?php

use Illuminate\Database\Seeder;

class employeeseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\employee::class, 5)->create();
    }
}
