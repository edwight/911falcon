@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

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
              </div>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        {!! Form::open(['action'=>'Admin\UsersController@store','class'=>'form-horizontal','role'=>'form', 'files' => true]) !!}
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    {!! Form::label('nombre', 'Nombre', array('for' => 'Inputphone')) !!}
                    {!! Form::text('nombre', null,['class'=>'form-control','id'=>'Inputphone','name'=>'nombre','placeholder'=>'Nombre'] ) !!}
                  </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    {!! Form::label('telefono', 'Telefono', array('for' => 'Inputname')) !!}
                    {!! Form::text('telefono', null,['class'=>'form-control','id'=>'Inputname','name'=>'telefono','placeholder'=>'Telefono'] ) !!}
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cedula', 'Cedula', array('for' => 'Inputdni')) !!}
                    {!! Form::text('cedula', null,['class'=>'form-control','id'=>'Inputdni','name'=>'cedula','placeholder'=>'Cedula'] ) !!}
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  {!! Form::label('password', 'Password', array('for' => 'InputPassword')) !!}
                  {!! Form::password('password'', null,['class'=>'form-control','id'=>'InputPassword','name'=>'password','placeholder'=>'Password'] ) !!}
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
               <div class="form-group">
                    <label for="DireccionInput">Grupo</label>
                    <div class="col-md-6 ">
                        <select class="form-control select2" name="motivos" style="width: 100%;">
                        <option selected="selected"> </option>
                          @foreach ($grupolist as $grupo)
                             <option value="{{ $grupo->id }}">{{ $grupo->name }}</option>
                          @endforeach
                        </select>
                    </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Tipo de Usuario</label>
                    {!! Form::label('type', 'Tipo de usuario', ['class' => 'col-md-4 control-label']) !!}
                    {!! Form::select('type',[''=>'selecione tipo','Supervisor'=>'supervisor','Operador'=>'operador','despachador'=>'Despachador','admin'=>'Administrador'], null,['class'=>'form-control']) !!}
                 </div>
                <!-- /.form-group -->
            </div>
            <!-- /.row -->
          </div>
        <!-- /.box-body -->
        <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
      </div>
      <!-- /.box -->
    {!! Form::close() !!}
    </section>
    <!-- /.content -->
  </div>
@endsection





