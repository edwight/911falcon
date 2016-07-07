{!! Form::open(array('action' => 'ContactoController@store', 'method' => 'post')) !!}
	{!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name') !!}
    {!! Form::label('phone', 'Telefono') !!}
    {!! Form::text('phone') !!}
    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::textarea('direccion') !!}
    {!! Form::label('descripcion', 'Descripcion') !!}
    {!! Form::textarea('descripcion') !!}
    {!! Form::label('p_referencia', 'Punto de Referencia') !!}
    {!! Form::textarea('p_referencia') !!}
    {!! Form::submit('Click Me!') !!}
{!! Form::close() !!}