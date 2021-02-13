<?php

use Illuminate\Database\Seeder;

use App\Models\Standing;

class StandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Standing::insert([
            ['team_id' => 1],
            ['team_id' => 2],
            ['team_id' => 3],
            ['team_id' => 4],
        ]);
    }
}
