@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Usuario</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Nombre del usuario</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email del usuario</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>
                        <hr>
                        <h3>Lista de Roles</h3>
                        <div>
                            @foreach ($roles as $role)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $role->id }}" name="roles[]"
                                    id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    {{ $role->name }}
                                    <em>{{ $role->description }}</em>
                                </label>
                            </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection