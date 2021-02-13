<?php

use Illuminate\Database\Seeder;

use App\Models\Match;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Match::insert([
            [
                'home_team'   => 2,
                'guest_team'  => 1,
                'week'        => 1,
            ],

            [
                'home_team'   => 4,
                'guest_team'  => 3,
                'week'        => 1,
            ],

            [
                'home_team'   => 1,
                'guest_team'  => 3,
                'week'        => 2,
            ],

            [
                'home_team'   => 4,
                'guest_team'  => 2,
                'week'        => 2,
            ],

            [
                'home_team'   => 4,
                'guest_team'  => 1,
                'week'        => 3,
            ],

            [
                'home_team'   => 3,
                'guest_team'  => 2,
                'week'        => 3,
            ],


            [
                'home_team'   => 1,
                'guest_team'  => 4,
                'week'        => 4,
            ],

            [
                'home_team'   => 2,
                'guest_team'  => 3,
                'week'        => 4,
            ],

            [
                'home_team'   => 3,
                'guest_team'  => 4,
                'week'        => 5,
            ],

            [
                'home_team'   => 1,
                'guest_team'  => 2,
                'week'        => 5,
            ],

            [
                'home_team'   => 2,
                'guest_team'  => 4,
                'week'        => 6,
            ],

            [
                'home_team'   => 3,
                'guest_team'  => 1,
                'week'        => 6,
            ],
        ]);
    }
}
