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
        {!! Form::open(['action' =>'Despachadores\DespachadoresController@store','role'=>'form']) !!}

          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                    {!! Form::label('telefono', 'Telefono', array('for' => 'Inputphone')) !!}
                    <input type="text" value="{{$contacto->telefono}}" class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                <!-- /.form-group -->
                  <div class="form-group">
                    {!! Form::label('nombre', 'Nombre', array('for' => 'Inputname')) !!}
                    <input type="text" value="{{$contacto->nombre}}"  class="form-control" placeholder="Enter ..." disabled="">
                  </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cedula', 'Cedula', array('for' => 'Inputdni')) !!}
                   <input type="text"  value="{{$contacto->cedula}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  {!! Form::label('apellido', 'Apellido', array('for' => 'InputApellido')) !!}
                  <input type="text" value="{{$contacto->apellido}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                  {!! Form::label('direccion', 'Direccion', array('for' => 'InputDireccion')) !!}
                  <textarea class="form-control"  rows="10" placeholder="Enter ..." disabled="">{{$contacto->direccion->ubicacion}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('p_referencia', 'Punto de Referencia', array('for' => 'InputPreferencia')) !!}
                    <textarea class="form-control" rows="10" placeholder="Enter ..." disabled="">{{$contacto->direccion->preferencia}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('descripcion', 'Descripcion', array('for' => 'Inputdescripcion')) !!}
                    <textarea class="form-control" rows="10" placeholder="Enter ..." disabled="">{{$contacto->direccion->despcricion}}</textarea>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Estado</label>
                    <input type="text" value="{{$contacto->estado->entidad}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Municipio</label>
                    <input type="text" value="{{$contacto->municipio->municipio}}" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <div class="form-group">
                    <label for="DireccionInput">Ciudad</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="DireccionInput">Organismos</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="DireccionInput">Motivos</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled="" value="{{ $contacto->motivo->motivo}}">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
         {!! Form::hidden('user_id', $user->id) !!}
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