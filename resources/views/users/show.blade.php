@extends('layout')

@section('title', 'User | ' . $user->name)
@section('content')
	<div class="container">
		<div class="bg-white p-5 shadow rounded">
			<h1>{{$user->name}}</h1>
			<div class="d-flex justify-content-between align-items-center">
				<table class="table">
					<tr>
						<th>Nombre:</th>
						<td>{{ $user->name }}</td>
					</tr>
					<tr>
						<th>Email:</th>
						<td>{{ $user->email }}</td>
					</tr>
					<tr>
						<th>Roles:</th>
						<td>@foreach ($user->roles as $role)
							{{ $role->display_name }}
						@endforeach</td>
					</tr>
				</table>
			</div>
		</div>
		@can('edit', $user)
			{{-- Solo el usuario actual puede editar, salvo el admin --}}
			<a href="{{route('user.edit', $user->id)}}" class="btn btn-info">@lang('Edit')</a>	
		@endcan
		@can('destroy', $user)
			<form style="display:inline" 
				method="POST" 
				action="{{ route('user.destroy', $user->id) }}">
				{!! csrf_field() !!}	
				{!! method_field('DELETE') !!}	

				<button class="btn btn-danger" type="submit">Eliminar</button>
			</form>
		@endcan
	</div>
@endsection