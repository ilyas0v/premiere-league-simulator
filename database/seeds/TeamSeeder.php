<?php

use Illuminate\Database\Seeder;

use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::insert([
            ['name' => 'Chelsea'],
            ['name' => 'Arsenal'],
            ['name' => 'Manchester City'],
            ['name' => 'Liverpool']
        ]);
    }
}
