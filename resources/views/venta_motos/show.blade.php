@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Venta de Moto</h1>

        <div>
            <p><strong>ID:</strong> {{ $ventaMoto->id }}</p>
            <p><strong>Nombre del Vendedor:</strong> {{ $ventaMoto->Nombre_Vendedor }}</p>
            <p><strong>Nombre del Comprador:</strong> {{ $ventaMoto->Nombre_Comprador }}</p>
            <p><strong>Marca de la Moto:</strong> {{ $ventaMoto->Marca_Moto }}</p>
            <p><strong>Valor de la Moto:</strong> {{ $ventaMoto->Valor_Moto }}</p>
            <p><strong>Fecha de Venta:</strong> {{ $ventaMoto->Fecha_Venta }}</p>
            <!-- Agrega más campos según sea necesario -->
        </div>

        <a href="{{ route('venta-motos.index') }}" class="btn btn-primary">Volver a la Lista de Ventas de Motos</a>
    </div>
@endsection

