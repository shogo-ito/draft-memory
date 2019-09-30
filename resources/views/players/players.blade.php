@foreach ($players as $player)    
    <div class="m-4">
        <div class="row text-white" style="background: green">
            <h3 class="text-left font-weight-bold p-3">{{ $player->player_name }}（{{ $player->team_name }}）</h3>
        </div>
        
        <div class="row" style="background: lightgray">
            <h4 class="text-left font-weight-bold p-3">
                {{ $player->team_year }}年{{ $player->height }}cm{{ $player->weight }}kg {{ $player->dominant_hand_pitch }}/{{ $player->dominant_hand_batting }} ({{ $player->position }})
            </h4>
        </div>
        
        <div class="row">
            <div class="col-sm-5" style="background: skyblue">
                <h4 class="font-weight-bold text-center mt-3">選手評価</h6>
                
                <hr>
                
                    <table class="container">
                        <thead>
                            <tr><th class="font-weight-bold h5">野手評価</th><th></th></tr>
                        </thead>
                        <tbody>
                            <tr><th>パワー</th><th class="text-right">{{ $player->power }}</th></tr>
                            <tr><th>ミート</th><th class="text-right">{{ $player->meeting }}</th></tr>
                            <tr><th>走力</th><th class="text-right">{{ $player->running }}</th></tr>
                            <tr><th>守備</th><th class="text-right">{{ $player->fielding }}</th></tr>
                            <tr><th>将来性</th><th class="text-right">{{ $player->total }}</th></tr>
                        </tbody>
                    </table>
                    
                    <hr>
                    
                    <table class="container mb-3">
                        <thead>
                            <tr><th class="font-weight-bold h5">投手評価</th><th></th></tr>
                        </thead>
                        <tbody>
                            <tr><th>球速</th><th class="text-right">{{ $player->pace }}<space>km/h</space></th></tr>
                            <tr><th>コントロール</th><th class="text-right">{{ $player->control }}</th></tr>
                            <tr><th>スタミナ</th><th class="text-right">{{ $player->stamina }}</th></tr>
                            <tr><th>球種</th><th  class="text-right">{{ $player->type_of_pitch }}</th></tr>
                        </tbody>
                    </table>
            </div>
            
            <div class="col-sm-7" style="background: ivory">
                <h6 class="font-weight-bold h5 mt-3">コメント(成績、選手の特徴等)：</h6>
                    <p class="font-weight-light">{{ $player->comment }}</p>
            </div>
        </div>
        
        <p class="text-left m-0">投稿者：{{ $player->user->name }}</p>
        <p class="text-left m-0">投稿日時：{{ $player->created_at }}</p>
        
        <div>
            @if (Auth::id() == $player->user_id)
                {!! Form::open(['route' => ['players.destroy', $player->id], 'method' => 'delete']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            @endif
        </div>
        
        
        
    </div>
    
    <hr>
@endforeach
{{ $players->links('pagination::bootstrap-4') }}