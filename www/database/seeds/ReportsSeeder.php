<?php

use Illuminate\Database\Seeder;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<=99; $i++) {
            $reports = factory(App\Report::class, 1000)->make()->toArray();
            App\Report::insert($reports);
        }
    }
}
