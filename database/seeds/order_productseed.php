<?php

use Illuminate\Database\Seeder;

class order_productseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\order_product::class, 5)->create();
    }
}
