@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Venta de Moto</h1>

        <form action="{{ route('venta-motos.update', $ventaMoto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre_vendedor">Nombre del Vendedor:</label>
                <input type="text" name="nombre_vendedor" class="form-control" value="{{ $ventaMoto->Nombre_Vendedor }}">
            </div>

            <div class="form-group">
                <label for="nombre_comprador">Nombre del Comprador:</label>
                <input type="text" name="nombre_comprador" class="form-control" value="{{ $ventaMoto->Nombre_Comprador }}">
            </div>

            <div class="form-group">
                <label for="marca_moto">Marca de la Moto:</label>
                <input type="text" name="marca_moto" class="form-control" value="{{ $ventaMoto->Marca_Moto }}">
            </div>

            <div class="form-group">
                <label for="valor_moto">Valor de la Moto:</label>
                <input type="number" name="valor_moto" class="form-control" value="{{ $ventaMoto->Valor_Moto }}">
            </div>

            <div class="form-group">
                <label for="fecha_venta">Fecha de Venta:</label>
                <input type="date" name="fecha_venta" class="form-control" value="{{ $ventaMoto->Fecha_Venta }}">
            </div>

            <!-- Agrega más campos según sea necesario -->

            <button type="submit" class="btn btn-primary">Actualizar Venta de Moto</button>
        </form>
    </div>
@endsection
