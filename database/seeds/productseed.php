<?php

use Illuminate\Database\Seeder;

class productseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\product::class, 5)->create();
    
    }
}
