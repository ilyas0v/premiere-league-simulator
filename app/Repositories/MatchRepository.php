<?php 

namespace App\Repositories;

use App\Models\Match;
use App\Models\Team;

class MatchRepository
{
    private $matchModel;
    private $teamModel;

    public function __construct(Match $matchModel, Team $teamModel)
    {
        $this->matchModel    = $matchModel;
        $this->teamModel     = $teamModel;
    }



    public function create()
    {

        // if($this->matchModel->get()->isEmpty())
        // {
        //     // $teams = $this->get_teams();
        //     // $guest_teams = $teams->reverse();

        //     // $fixtures = [];

        //     // $week = 1;

        //     // for($i = 0; $i < count($teams); $i++)
        //     // {
        //     //     for($j = 1; $j < count($teams); $j++)
        //     //     {
        //     //         $fixtures[] = [
        //     //             'home_team'  => $teams[$i]->id,
        //     //             'guest_team' => $teams[$j]->id,
        //     //             'week'       => $week++
        //     //         ];

        //     //     }
        //     // }


        //     // foreach($teams as $i => $team)
        //     // {
        //     //     $fixtures[] = [
        //     //         'home_team'  => $team->id,
        //     //         'guest_team' => $guest_teams[$i]->id,
        //     //         'week'       => ($i + 1),
        //     //     ];
        //     // }

        //     // $fixtures_final = $fixtures;

        //     // foreach($fixtures as $fixture)
        //     // {
        //     //     $fixtures_final[] = [
        //     //         'home_team'  => $fixture['guest_team'],
        //     //         'guest_team' => $fixture['home_team'],
        //     //         'week'       => $week++
        //     //     ];
        //     // }
        // }

        //return $this->make_fixtures($teams);
    }


    public function all()
    {
        return $this->matchModel->all();
    }



    public function get_teams()
    {
        return $this->teamModel->all();
    }



    // public function make_fixtures($teams)
    // {
    //     $pairs_by_week = [];

    //     $fixtures = [];

    //     $week = 1;

    //     foreach($teams as $i => $team_i)
    //     {
    //         foreach($teams as $j => $team_j)
    //         {
    //             $fixtures[] = [
    //                 'home_team'  => $teams[$i]->id,
    //                 'guest_team' => $teams[$j]->id,
    //                 'week'       => ($i + 1)
    //             ];
    //         }
    //     }

    //     return $fixtures;
    // }



    public function get_by_week($week)
    {
        $matches  = $this->matchModel
                         ->where('week', '=', $week)
                         ->get();

        return $matches;
    }

}