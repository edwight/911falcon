@foreach($user as $user)
<ul>
<li><strong>{{$user->id}}</strong></li>
<li><a href="users/{{$user->id}}">{{$user->name}}</a></li>
</ul>
@endforeach
