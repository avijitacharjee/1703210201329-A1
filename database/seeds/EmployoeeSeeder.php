<?php

use Illuminate\Database\Seeder;
use App\Employoee;

class EmployoeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Employoee::class, 100)->create();
    }
}
