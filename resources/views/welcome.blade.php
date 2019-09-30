@extends('layouts.app')

@section('content')

    @if(Auth::check())
        <div class="m-3">
            <p><span class="h4">{{ Auth::user()->name }}</span>ログイン中</p>
        </div>
        
        <div class="m-3">
            <p>{!! link_to_route('players.create', '選手登録', [], ['class' => 'text-danger font-weight-bold h4']) !!}をしよう！！</p>
        </div>
        
        <div class="text-center rounded m-4 p-3" style="height: 80px; background: lemonchiffon">
            <h1 class="font-weight-bold">ドラフト候補</h1>
        </div>
        
        @include('players.players', ['players' => $players])
        
    @else
        <div class="text-center bg-light rounded m-4 p-3">
            <h2 class="font-weight-bold">
                ドラフト候補選手を<br>
                登録しよう！！
            </h2>
        </div>
        <div class="text-center">
            {!! link_to_route('signup.get', 'ユーザ登録', [], ['class' => 'btn btn-primary mr-2']) !!}
            {!! link_to_route('login.get', 'ログイン', [], ['class' => 'btn btn-success']) !!}
        </div>
    @endif
    
@endsection
    