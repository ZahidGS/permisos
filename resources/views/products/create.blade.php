@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>Producto</h3></div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre del producto</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción del producto</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
