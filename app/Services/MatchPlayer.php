<?php 

namespace App\Services;

class MatchPlayer
{
    protected $matchRepo;
    protected $standingRepo;



    public function play($match)
    {
        //return $match;
        $home_team  = $this->standing_by_team_id($match->home_team);
        $guest_team = $this->standing_by_team_id($match->guest_team);

        return $this->give_score($home_team, $guest_team);
    }



    public function standing_by_team_id($id)
    {
        return \App\Models\Standing::where('team_id', $id)->first();
    }




    public function give_score($home_team, $guest_team)
    {
        $rand = rand(0, 10);

        if($home_team->points > $guest_team->points && $rand > 0)
        {
            $home_team->win($rand);
            $guest_team->lose($rand);
        }
        else if($home_team->points < $guest_team->points && $rand > 0)
        {
            $home_team->lose($rand);
            $guest_team->win($rand);
        }
    }
    
}