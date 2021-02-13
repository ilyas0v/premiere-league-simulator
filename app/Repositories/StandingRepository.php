<?php 

namespace App\Repositories;

use App\Models\Standing;
use App\Models\Team;

class StandingRepository
{
    private $standingModel;
    private $teamModel;

    public function __construct(Standing $standingModel, Team $teamModel)
    {
        $this->standingModel  = $standingModel;
        $this->teamModel      = $teamModel;
    }



    public function create()
    {

        if($this->standingModel->get()->isEmpty())
        {
            foreach($this->get_teams() as $team)
            {
                $this->standingModel->create(['team_id' => $team->id]);
            }
        }
    }


    public function all()
    {
        return $this->teamModel->join('standings', 'teams.id', '=', 'standings.team_id')
                          ->orderBy('standings.points', 'DESC')
                          ->orderBy('teams.name', 'ASC')
                          ->get();
    }



    public function get_teams()
    {
        return $this->teamModel->all();
    }


    public function find_by_team_id($id)
    {
        return $this->standingModel->find($id);
    }
}   