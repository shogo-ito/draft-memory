@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
            <li>{!! link_to_route('users.show', $user->name, ['id' => $user->id] , ['class' => 'h3 text-primary m-4']) !!}</li>
        @endforeach
    </ul>
    {{ $users->links('pagination::bootstrap-4') }}
@endif