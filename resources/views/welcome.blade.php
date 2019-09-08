@extends('layouts.app')

@section('content')

    @if(Auth::check())
        <h3 class="m-3"><span class="text-danger">{{ Auth::user()->name }}</span>様ログイン中</h3>
    @endif
        <div class="m-3">
            <div class="row">
                <input type="text" class="col-auto" placeholder="選手名を入力">
                <button type="button" class="col-auto btn btn-info btn-sm ml-2">選手検索</button>
            </div>
        </div>
        <div class="m-3">
            <p>選手登録は{!! link_to_route('signup.get', 'ユーザ登録', [], ['class' => 'text-danger font-weight-bold h4']) !!}をお願いします</p>
        </div>
    
    @include('card.card')
    
@endsection
    