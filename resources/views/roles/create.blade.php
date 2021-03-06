@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Role</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre del role</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug del role</label>
                            <input type="text" class="form-control" id="slug" name="slug">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción del role</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <hr>
                        <h3>Permiso especial</h3>
                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="special" name="special" class="custom-control-input" value="all-access">
                                <label class="custom-control-label" for="special">Acceso total</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="special2" name="special" class="custom-control-input" value="no-access">
                                <label class="custom-control-label" for="special2">Ningún acceso</label>
                            </div>
                        </div>
                        <hr>
                        <h3>Lista de permisos</h3>
                        <div class="form-group">
                            @foreach ($permissions as $permission)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="Check{{ $permission->id }}" name="permissions[]" value="{{ $permission->id }}" >
                                <label class="custom-control-label" for="Check{{ $permission->id }}">
                                    {{ $permission->name }} - 
                                    <em>{{ $permission->description }}</em></label>
                              </div>

                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection