<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'home_team',
        'guest_team',
        'week',
        'home_team_goal',
        'guest_team_goal',
        'took_place',
    ];
}
