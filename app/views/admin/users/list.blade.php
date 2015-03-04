@extends ('admin/layout')

@section ('title') Lista de Usuarios @stop

@section ('content')

  <h1>Lista de usuarios</h1>
  


  <table class="table table-striped">
  	{{ $users->links() }}
    <tr>
        <th>Full name</th>
        <th>Email</th>
        <th> </th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->full_name }}</td>
        <td>{{ $user->email }}</td>
        <td>
        	<a href="users/{{$user->id}}" >
        		<button type="button" class="btn btn-default" aria-label="Left Align">
  					<span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
				</button>
			</a>
        </td>
    </tr>
    @endforeach
  </table>


  <p>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear un nuevo usuario</a>
  </p>

@stop