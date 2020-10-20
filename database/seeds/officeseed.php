<?php

use Illuminate\Database\Seeder;

class officeseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\office::class, 5)->create();
    }
    
}
