@extends('layouts.master')

@section('css')
<style type="text/css">
   .bg-1{
    background-color: #dd4b39 !important;
   }
  .bg-2{
    background-color: #00a65a !important; 
  }
  .bg-3{
    background-color: #00c0ef !important; 
  }
  .bg-4{
    background-color: #0f00ef !important; 
  }
  .bg-5{
    background-color: #aa1ace !important; 
  }
  .bg-6{
    background-color: #795548 !important; 
  }
  .bg-7{
    background-color: #9e9e9e !important; 
  }
  .bg-8{
    background-color: #ecb204 !important; 
  }
</style>
@endsection
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <div class="col-xs-4">
              <h3 class="box-title">Responsive Hover Table</h3>
            </div>
              <div class="col-xs-4">
                  <!-- radio -->
                <div class="form-group">
                  <label>
                    <input type="radio" name="r2" class="minimal-red" checked>
                    Telefono
                  </label>
                  <label>
                    <input type="radio" name="r2" class="minimal-red">
                    Nombre
                  </label>
                  <label>
                    <input type="radio" name="r2" class="minimal-red">
                    Operador
                  </label>
                  <label>
                    <input type="radio" name="r2" class="minimal-red">
                    Organismos
                  </label>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="box-tools">
                  <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>Telefono</th>
	                  <th>Cedula</th>
	                  <th>Nombre</th>
	                  <th>Operador</th>
                    <th>Organismos</th>
	                  <th>Estatus</th>
                    <th>fecha</th>
	                </tr>
                </thead>
                <tbody>
                @foreach($contacto as $contactos)
                	@if($contactos->status)
                	<tr>
				          <th scope="row"><a href=" /admin/despacho/{{ $contactos->id}}">{{ $contactos->telefono }}</a></th>
				          <td>{{ $contactos->cedula }}</td>
				          <td>{{ $contactos->nombre }}</td>
                  <td>
                  @foreach($contactos->user as $users)
				            {{ $users->name }}
                  @endforeach
                  </td>
                  <td>
                  @foreach($contactos->organismos as $organismos)
                    <small class="label pull-right bg-{{$organismos->id}}">{{ $organismos->siglas }}</small>
                  @endforeach
                  </td>
				          <td><small class="label pull-right bg-blue">no activo</small></td>
                  <td>{{ $contactos->fecha_at }}</small></td>
					       </tr>
                	@else
                	<tr>
					  <th scope="row"><a href=" /admin/despacho/{{ $contactos->id}}">{{ $contactos->telefono }}</a></th>
			          <td>{{ $contactos->cedula }}</td>
			          <td>{{ $contactos->nombre }}</td>
                <td>
			          @foreach($contactos->user as $users)
                    {{ $users->name }}
                @endforeach
                </td>
                <td>
                  @foreach($contactos->organismos as $organismos)
                     <small class="label pull-right bg-{{$organismos->id}}">{{ $organismos->siglas }}</small>
                  @endforeach
                </td>
			          <td><small class="label pull-right bg-red">activo</small></td>
			        </a>
					</tr>
					@endif
				@endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('javascript')
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection

