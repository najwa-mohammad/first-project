<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(productlineseed::class);
        $this->call(productseed::class);
        $this->call(officeseed::class);
        $this->call(employeeseed::class);
        $this->call(customerseed::class);
        $this->call(orderseed::class);
        $this->call(paymentseed::class); 
        $this->call(order_productseed::class); 
    }
    
}
