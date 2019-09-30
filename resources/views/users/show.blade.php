@extends('layouts.app')

@section('content')

    <h3 class="m-3"><span class="text-danger">{{ $user->name }}</span>の登録選手一覧</h3>
    
    @if (count($players) > 0)
        @include('players.players', ['players' => $players])
    @endif
@endsection