@extends ('admin/layout')

@section ('title') Lista de Usuarios @stop

@section ('content')

  <h1>Lista de usuarios</h1>
  


  <table class="table table-striped" style="width: 900px">
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
        	<a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info">
              Ver
          </a>
          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
            Editar
          </a>
    </tr>
    @endforeach
  </table>


  <p>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear un nuevo usuario</a>
  </p>

@stop