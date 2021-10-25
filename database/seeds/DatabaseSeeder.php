<?php

use Illuminate\Database\Seeder;
use App\clientes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(clientes::class, 10)->create();
    }
}
