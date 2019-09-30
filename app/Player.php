<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'player_name', 'team_type', 'team_year', 'team_name', 'position', 'height', 'weight',
        'power', 'meeting', 'running', 'fielding', 'total', 'comment', 'user_id',
        'pace', 'control', 'stamina', 'type_of_pitch', 'dominant_hand_pitch', 'dominant_hand_batting',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
