extends('0_Layouts.app')

@section('content')

<h1>MyPage</h1>
    
@if (count($users) > 0)
    <ul class="media-list">
        @foreach ($users as $user)
            <li class="media">
                <div class="media-left">
                <img src="" alt="">
                </div>
       
                <div class="media-body">
                    <div>
                        {{ $user->name }}
                    </div>
            
                    <div>
                        <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
                    </div>
                </div>
            </li>

        <! - Omission ->
        @endforeach
    </ul>

{!! $users->render() !!}
@endif
    
@endsection