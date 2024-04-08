@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Venta de Motos</h1>
        
        <a href="{{ route('venta_motos.create') }}" class="btn btn-primary mb-3">Crear Venta de Moto</a>

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
                        <td>{{ $ventaMoto->Nombre_Vendedor }}</td>
                        <td>{{ $ventaMoto->Nombre_Comprador }}</td>
                        <td>{{ $ventaMoto->Marca_Moto }}</td>
                        <td>{{ $ventaMoto->Valor_Moto }}</td>
                        <td>{{ $ventaMoto->Fecha_Venta }}</td>
                        <td>
                            <a href="{{ route('venta_motos.show', $ventaMoto->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('venta_motos.edit', $ventaMoto->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('venta_motos.destroy', $ventaMoto->id) }}" method="POST" style="display: inline;">
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

