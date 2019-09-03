<?php

use Illuminate\Database\Seeder;
use App\Assessment;

class AssessmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Assessment::class,3)->create();
    }
}
