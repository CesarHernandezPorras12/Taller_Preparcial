@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Venta de Motos</h1>
        
        <a href="{{ route('venta-motos.create') }}" class="btn btn-primary mb-3">Crear Venta de Moto</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Vendedor</th>
                    <th>Nombre del Comprador</th>
                    <th>Marca de la Moto</th>
                    <th>Valor de la Moto</th>
                    <th>Fecha de Venta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventasMotos as $ventaMoto)
                    <tr>
                        <td>{{ $ventaMoto->id }}</td>
                        <td>{{ $ventaMoto->nombre_vendedor }}</td>
                        <td>{{ $ventaMoto->nombre_nomprador }}</td>
                        <td>{{ $ventaMoto->marca_moto }}</td>
                        <td>{{ $ventaMoto->valor_moto }}</td>
                        <td>{{ $ventaMoto->fecha_venta }}</td>
                        <td>
                            <a href="{{ route('venta-motos.show', $ventaMoto->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('venta-motos.edit', $ventaMoto->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('venta-motos.destroy', $ventaMoto->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta venta de moto?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

