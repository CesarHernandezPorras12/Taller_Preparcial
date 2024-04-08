@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Nueva Venta de Moto</h1>

        <form action="{{ route('venta-motos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre_vendedor" class="form-label">Nombre del Vendedor:</label>
                <input type="text" name="nombre_vendedor" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nombre_comprador" class="form-label">Nombre del Comprador:</label>
                <input type="text" name="nombre_comprador" class="form-control">
            </div>

            <div class="mb-3">
                <label for="marca_moto" class="form-label">Marca de la Moto:</label>
                <input type="text" name="marca_moto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="valor_moto" class="form-label">Valor de la Moto:</label>
                <input type="number" name="valor_moto" class="form-control">
            </div>

            <div class="mb-3">
                <label for="fecha_venta" class="form-label">Fecha de Venta:</label>
                <input type="date" name="fecha_venta" class="form-control">
            </div>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit" class="btn btn-primary">Crear Venta de Moto</button>
        </form>
    </div>
@endsection

