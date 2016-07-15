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
                    <div class="form-group">
                        <div class="col-md-6">
                        	<a href="/admin/users/create"><button type="button" class="btn btn-primary">Nuevo Usuario</button></a>
                        </div>
                    </div>
                    <div class="row">
					<div class="col-md-6">

					<!-- busqueda de usuario -->

				  	</div><!-- /.col-lg-6 -->
				  	</div><!-- /.row -->
					<table class="table table-hover">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th>grupos</th>
				        </tr>
				      </thead>
				      <tbody>
						@foreach($grupos as $grupo)
					        <tr>
					          <th scope="row">
					          {{ $grupo->id}}</th>
					          <td>{{ $grupo->name }}</td>
					        </tr>
				     	@endforeach
				     
				    </table>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection