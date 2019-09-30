<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(20);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $players = $user->players()->orderBy('created_at', 'desc')->paginate(5);
        
        $data = [
            'user' => $user,
            'players' => $players,
        ];
        
        return view('users.show', $data);
    }
}
