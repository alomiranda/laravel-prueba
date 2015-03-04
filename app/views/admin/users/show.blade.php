@extends ('admin/layout')

@section ('title') Muestra @stop

@section ('content')

  
  <div class="panel panel-info">
  	<div class="panel-heading">Hola {{$user->full_name}}</div>
  			<div class="panel-body">
    		<p>{{$user->email}}</p>
  	</div>


  </div>

  


  <p>
    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Todos</a>
  </p>

@stop