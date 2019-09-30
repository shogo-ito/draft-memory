@extends('layouts.app')

@section('content')

    <div class="text-center rounded m-4 p-3" style="height: 80px; background: lemonchiffon">
        <h1 class="font-weight-bold">選手登録</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-10 offset-sm-1">
            
            {!! Form::open(['route' => 'players.store']) !!}
                <div class="form-group">
                    {!! Form::label('player_name', '選手名', ['class' => 'font-weight-bold h5']) !!}
                    {!! Form::text('player_name', old('player_name'), ['class' => 'form-control']) !!}
                </div>
                
                <hr>
                
                <div class="form-group">
                    {!! Form::label('team', '所属チーム', ['class' => 'font-weight-bold h5']) !!}
                        <div class="form-group mt-3">
                            {!! Form::label('team_type', '種類', ['class' => 'mr-2']) !!}
                            {!! Form::select('team_type', ['小学生' => '小学生', '中学生' => '中学生', '高校生' => '高校生', '大学生' => '大学生', '社会人' => '社会人', '独立' => '独立']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('team_year', '所属チームしているチームの年数', ['class' => 'mr-2']) !!}
                            {!! Form::selectRange('team_year', 1, 10) !!}<span class="ml-1">年</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('team_name', '所属チーム名', ['class' => 'mr-2']) !!}
                            {!! Form::text('team_name', old('team_name'), ['class' => 'form-control']) !!}
                        </div>
                </div>
                
                <hr>
                
                <div class="form-group">
                    {!! Form::label('position', 'ポジション', ['class' => 'font-weight-bold h5 mb-3']) !!}
                        <div class="form-group">
                            {!! Form::select('position', ['投手' => '投手', '捕手' => '捕手', '内野手' => '内野手', '外野手' => '外野手']) !!}
                        </div>
                </div>
                
                <hr>
                
                <div class="form-group">
                    {!! Form::label('height/weight', '身長/体重', ['class' => 'font-weight-bold h5']) !!}
                        <div class="form-group">
                            {!! Form::number('height') !!}<span class="ml-1 mr-1">cm</span>
                        </div>
                        <div class="form-group">
                            {!! Form::number('weight') !!}<span class="ml-1">kg</span>
                        </div>
                </div>
                
                <hr>
                
                <div class="form-group">
                    {!! Form::label('dominant_hand', '利き手', ['class' => 'font-weight-bold h5']) !!}
                        <div class="form-group">
                            {!! Form::select('dominant_hand_pitch', ['右' => '右', '左' => '左']) !!}<span class="ml-1 mr-1">投</span>
                            {!! Form::select('dominant_hand_batting', ['右' => '右', '左' => '左']) !!}<span class="ml-1 mr-1">打</span>
                        </div>
                </div>
                
                <hr>
                
                <div class="form-group">
                    {!! Form::label('ability', '選手能力(野手)', ['class' => 'font-weight-bold h5']) !!}
                        <div class="form-group mt-3">
                            {!! Form::label('power', 'パワー', ['class' => 'mr-2']) !!}
                            {!! Form::select('power', ['S' => 'S', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F'], 'C') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('meeting', 'ミート', ['class' => 'mr-2']) !!}
                            {!! Form::select('meeting', ['S' => 'S', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F'], 'C') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('running', '走力', ['class' => 'mr-4']) !!}
                            {!! Form::select('running', ['S' => 'S', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F'], 'C') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fielding', '守備', ['class' => 'mr-4']) !!}
                            {!! Form::select('fielding', ['S' => 'S', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F'], 'C') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('total', '総合', ['class' => 'mr-4']) !!}
                            {!! Form::select('total', ['S' => 'S', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F'], 'C') !!}
                        </div>
                </div>
                
                <div class="form-group">
                    {!! Form::label('ability', '選手能力(投手)', ['class' => 'font-weight-bold h5']) !!}
                        <div class="form-group mt-3">
                            {!! Form::label('pace', '球速', ['class' => 'mr-2']) !!}
                            {!! Form::number('pace') !!}<span class="ml-1 mr-1">km/h</span>
                        </div>
                        <div class="form-group">
                            {!! Form::label('control', 'コントロール', ['class' => 'mr-2']) !!}
                            {!! Form::select('control', ['S' => 'S', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F'], 'C') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('stamina', 'スタミナ', ['class' => 'mr-4']) !!}
                            {!! Form::select('stamina', ['S' => 'S', 'A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F'], 'C') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('type_of_pitch', '球種') !!}
                            {!! Form::text('type_of_pitch', old('type_of_pitch'), ['class' => 'form-control']) !!}
                        </div>
                </div>
                
                <hr>
                
                <div class="form-group">
                    {!! Form::label('comment', 'コメント(成績、選手の特徴等)', ['class' => 'font-weight-bold h5']) !!}
                    {!! Form::textarea('comment', old('comment'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="">
                    {!! Form::submit('登録', ['class' => 'btn btn-primary btn-lg float-right']) !!}
                </div>
                
            {!! Form::close() !!}
            
        </div>
    </div>

@endsection