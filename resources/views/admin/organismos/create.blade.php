@extends('base')

@section('adminModule')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registar</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                     {!! Form::open(['action'=>'Admin\OrganismosController@store','class'=>'form-horizontal','role'=>'form', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nombre', null,['class'=>'form-control','name'=>'nombre'] ) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('siglas', 'Siglas', array('class' => 'col-md-4 control-label')) !!}
                            <div class="col-md-6">
                                {!! Form::text('siglas',null,['class'=>'form-control','name'=>'siglas'] ) !!}
                            </div>
                        </div>

                      
                        <div class="form-group">
                            {!! Form::label('telefono', 'Telefono', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('telefono', null,['class'=>'form-control','name'=>'telefono'] ) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registar
                                </button>
                            </div>
                        </div>
                     {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection