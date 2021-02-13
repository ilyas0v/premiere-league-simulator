<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\StandingRepository;
use App\Repositories\MatchRepository;

use App\Services\MatchPlayer;

class SimulationController extends Controller
{

    private $standingRepo;
    
    public function __construct(StandingRepository $standingRepo, MatchRepository $matchRepo)
    {
        $this->standingRepo = $standingRepo;
        $this->standingRepo->create();

        $this->matchRepo = $matchRepo;
        //$this->matchRepo->create();
    }


    public function index()
    {
        $teams = $this->standingRepo->all();
        //return $standings;

        return $this->matchRepo->all();

        return view('index', compact('teams'));
    }


    public function play_by_week($week)
    {
        $matches_by_week  = $this->matchRepo->get_by_week($week);


        foreach($matches_by_week as $match)
        {
            (new MatchPlayer)->play($match);
        }
    }
}
