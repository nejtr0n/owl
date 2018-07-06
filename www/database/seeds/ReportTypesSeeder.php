<?php

use Illuminate\Database\Seeder;

class ReportTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ReportType::class, 150)->create();
    }
}
