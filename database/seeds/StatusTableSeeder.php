<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::insert([
            ['status' => 'New'],
            ['status' => 'On-going'],
            ['status' => 'Closed']
        ]);
    }
}