<?php

use Illuminate\Database\Seeder;

class SensorLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\SensorLog::class, 150)->create();
    }
}
