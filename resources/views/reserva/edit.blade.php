@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Reserva</h1>
@stop

@section('content')
<h2>Editar</h2>

<form action="/reservas/{{$reserva->id}}" method="POST" >
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $reserva->nombre }}" required>
    </div>

    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha:</label>
        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $reserva->fecha }}" required>
    </div>

    
    <div class="mb-3">
        <label for="hora" class="form-label">Hora:</label>
        <select class="time" id="hora" name="hora" required>
            <option value="18:00" {{ $reserva->hora == '18:00' ? 'selected' : '' }}>18:00</option>
            <option value="19:00" {{ $reserva->hora == '19:00' ? 'selected' : '' }}>19:00</option>
            <option value="20:00" {{ $reserva->hora == '20:00' ? 'selected' : '' }}>20:00</option>
            <option value="21:00" {{ $reserva->hora == '21:00' ? 'selected' : '' }}>21:00</option>
 
            
        </select>
    </div>

    <div class="mb-3">
        <label for="numero_personas" class="form-label">Número de Personas:</label>
        <select class="form-select" id="numero_personas" name="numero_personas" required>
            <option value="1" {{ $reserva->numero_personas == 1 ? 'selected' : '' }}>1 persona</option>
            <option value="2" {{ $reserva->numero_personas == 2 ? 'selected' : '' }}>2 personas</option>
            <option value="3" {{ $reserva->numero_personas == 3 ? 'selected' : '' }}>3 personas</option>
            <option value="4" {{ $reserva->numero_personas == 4 ? 'selected' : '' }}>4 personas</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="consola" class="form-label">Consola:</label>
        <select class="form-select" id="consola" name="consola" required>
            <option value="">Seleccione una consola</option>
            <option value="PS1" {{ $reserva->consola == 'PS1' ? 'selected' : '' }}>PlayStation 1</option>
            <option value="PS2" {{ $reserva->consola == 'PS2' ? 'selected' : '' }}>PlayStation 2</option>
            <option value="GameCube" {{ $reserva->consola == 'GameCube' ? 'selected' : '' }}>GameCube</option>
            <option value="NES" {{ $reserva->consola == 'NES' ? 'selected' : '' }}>Nintendo Entertainment System (NES)</option>
            <option value="SNES" {{ $reserva->consola == 'SNES' ? 'selected' : '' }}>Super Nintendo Entertainment System (SNES)</option>
            <option value="SegaGenesis" {{ $reserva->consola == 'SegaGenesis' ? 'selected' : '' }}>Sega Genesis</option>
            <option value="N64" {{ $reserva->consola == 'N64' ? 'selected' : '' }}>Nintendo 64 (N64)</option>
            <option value="Dreamcast" {{ $reserva->consola == 'Dreamcast' ? 'selected' : '' }}>Sega Dreamcast</option>
            <option value="Arcade" {{ $reserva->consola == 'Arcade' ? 'selected' : '' }}>Máquina Arcade</option>
            <option value="NeoGeo" {{ $reserva->consola == 'NeoGeo' ? 'selected' : '' }}>Neo Geo</option>
            <option value="Atari2600" {{ $reserva->consola == 'Atari2600' ? 'selected' : '' }}>Atari 2600</option>
            <option value="Atari7800" {{ $reserva->consola == 'Atari7800' ? 'selected' : '' }}>Atari 7800</option>
            <option value="GameBoy" {{ $reserva->consola == 'GameBoy' ? 'selected' : '' }}>Game Boy</option>
            <option value="GameGear" {{ $reserva->consola == 'GameGear' ? 'selected' : '' }}>Sega Game Gear</option>
            <option value="MasterSystem" {{ $reserva->consola == 'MasterSystem' ? 'selected' : '' }}>Sega Master System</option>
            <option value="TurboGrafx16" {{ $reserva->consola == 'TurboGrafx16' ? 'selected' : '' }}>TurboGrafx-16</option>
            <option value="Commodore64" {{ $reserva->consola == 'Commodore64' ? 'selected' : '' }}>Commodore 64</option>
            <!-- Agrega más opciones de consolas según sea necesario -->
        </select>
    </div>

    <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje:</label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="3">{{ $reserva->mensaje }}</textarea>
    </div>

    <button style="margin-bottom: 10px" type="submit" class="btn btn-primary">Actualizar Reserva</button>
    <a style="margin-bottom: 10px" href="/reservas" class="btn btn-secondary">Cancelar</a>

</form>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop