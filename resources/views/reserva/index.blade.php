@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reservas</h1>
@stop

@section('content')
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Número de Personas</th>
            <th>Consola</th>
            <th>Mensaje</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservas as $reserva)
        <tr>
            <td>{{ $reserva->id }}</td>
            <td>{{ $reserva->nombre }}</td>
            <td>{{ $reserva->fecha }}</td>
            <td>{{ $reserva->hora }}</td>
            <td>{{ $reserva->numero_personas }}</td>
            <td>{{ $reserva->consola }}</td>
            <td>{{ $reserva->mensaje }}</td>
            <td>
                <form action="{{route ('reservas.destroy' ,$reserva->id)}}" method="POST" onsubmit="return confirmDelete()">
                <a href="/reservas/{{$reserva->id}}/edit" class="btn btn-primary">Editar Reserva</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar Reserva</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="reservas/create" class="btn btn-primary" style="margin: 20px">Reservar</a>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
function confirmDelete() {
    return confirm('¿Estás seguro de borrar la reserva?');
}
</script>
@stop