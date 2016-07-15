{!! Form::open(array('action' => 'Admin\GruposController@store' )) !!}
    {!! Form::label('grupos', 'Grupos') !!}
    {!! Form::text('grupos', '') !!}
    {!! Form::submit('Save', ['name' => 'submit']) !!}
{!! Form::close() !!}