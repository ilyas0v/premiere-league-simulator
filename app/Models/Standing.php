<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    protected $fillable = [
        'team_id',
        'played',
        'points',
        'wins',
        'loses',
        'draw',
        'goal_drawn',
    ];


    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }



    public function win($points)
    {
        $this->points += $points;
        $this->wins   += 1;
        $this->played += 1;   
    }



    public function lose($points)
    {

    }



    public function draw()
    {

    }
}
