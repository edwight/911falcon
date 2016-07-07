@foreach($contactos as $contacto)
<ul>
<li><strong>{{$contacto->id}}</strong></li>
<li><a href="contacto/{{$contacto->id}}">{{$contacto->name}}</a></li>
</ul>
@endforeach
