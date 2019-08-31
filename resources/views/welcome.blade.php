@extends('layouts.app')

@section('content')

    <div class="mt-2">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="選手名を入力">
            <button type="button" class="btn btn-light btn-sm">選手検索</button>
        </div>
    </div>
    <p><a href="#" class="text-danger text-right font-weight-bold h2">選手登録</a>はこちら(選手登録にはユーザ登録をお願いします)</p>
    
    @include('card.card')
    
@endsection
    