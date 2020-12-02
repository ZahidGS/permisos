<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 80)->create();

    }
}
