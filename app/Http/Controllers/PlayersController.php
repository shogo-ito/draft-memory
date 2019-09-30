<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Player;

class PlayersController extends Controller
{
    
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $players = Player::orderBy('created_at', 'desc')->paginate(5);
            
            $data = [
                'user' => $user,
                'players' => $players,
            ];
        }
        
        return view('welcome', $data);
    }
    
    public function create()
    {
        $player = new Player;
        
        return view('players.create', [
            'player' => $player,    
        ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'player_name' => 'required|max:191',
            'team_type' => 'required|max:191',
            'team_year' => 'required|max:191',
            'team_name' => 'required|max:191',
            'position' => 'required|max:191',
            'height' => 'required|max:191',
            'weight' => 'required|max:191',
            'power' => 'required|max:191',
            'meeting' => 'required|max:191',
            'running' => 'required|max:191',
            'fielding' => 'required|max:191',
            'total' => 'required|max:191',
            'comment' => 'required|max:191',
            'pace' => 'required|max:191',
            'control' => 'required|max:191',
            'stamina' => 'required|max:191',
            'type_of_pitch' => 'required|max:191',
            'dominant_hand_pitch' => 'required|max:191',
            'dominant_hand_batting' => 'required|max:191',
            
        ]);
        
        $request->user()->players()->create([
           'player_name' => $request->player_name,
           'team_type' => $request->team_type,
           'team_year' => $request->team_year,
           'team_name' => $request->team_name,
           'position' => $request->position,
           'height' => $request->height,
           'weight' => $request->weight,
           'power' => $request->power,
           'meeting' => $request->meeting,
           'running' => $request->running,
           'fielding' => $request->fielding,
           'total' => $request->total,
           'comment' => $request->comment,
           'pace' => $request->pace,
           'control' => $request->control,
           'stamina' => $request->stamina,
           'type_of_pitch' => $request->type_of_pitch,
           'dominant_hand_pitch' => $request->dominant_hand_pitch,
           'dominant_hand_batting' => $request->dominant_hand_batting,
        ]);
        
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $player = \App\Player::find($id);

        if (\Auth::id() === $player->user_id) {
            $player->delete();
        }

        return redirect('/');
    }
}
