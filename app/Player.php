<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'player_name', 'team_type', 'team_year', 'team_name', 'position', 'height', 'weight',
        'dominant_hand', 'power', 'meeting', 'running', 'fielding', 'total', 'comment', 'user_id',
    ];
    
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
