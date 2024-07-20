@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Reservar</h1>
@stop

@section('content')
<form action="/reservas" method="POST" >
    @csrf

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>

    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha:</label>
        <input type="date" class="form-control" id="fecha" name="fecha" required pattern="\d{2}/\d{2}/\d{4}" style="width: 150px">
    </div>

    <div class="mb-3">
        <label for="hora" class="form-label">Hora:</label>
        <select  class="time" id="hora" name="hora" required>
            <option value="">Seleccione hora</option>
            <option value="18:00">18:00</option>
            <option value="19:00">19:00</option>
            <option value="20:00">20:00</option>
            <option value="21:00">21:00</option>
            <option value="22:00">22:00</option>
 
            
        </select>
    </div>

    <div class="mb-3">
        <label for="numero_personas" class="form-label">Número de Personas:</label>
        <select class="form-select" id="numero_personas" name="numero_personas" required>
            <option value="">Seleccione nº de personas</option>
            <option value="1">1 persona</option>
            <option value="2">2 personas</option>
            <option value="3">3 personas</option>
            <option value="4">4 personas</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="consola" class="form-label">Consola:</label>
        <select class="form-select" id="consola" name="consola" required>
            <option value="">Seleccione consola o máquina</option>
            <option value="randomc">Consola Aleatoria</option>
            <option value="PS1">PlayStation 1</option>
            <option value="PS2">PlayStation 2</option>
            <option value="GameCube">GameCube</option>
            <option value="NES">Nintendo Entertainment System (NES)</option>
            <option value="SNES">Super Nintendo Entertainment System (SNES)</option>
            <option value="SegaGenesis">Sega Genesis</option>
            <option value="N64">Nintendo 64 (N64)</option>
            <option value="Dreamcast">Sega Dreamcast</option>
            <option value="Arcade">Máquina Arcade Aleatoria</option>
            <option value="NeoGeo">Neo Geo</option>
            <option value="Atari2600">Atari 2600</option>
            <option value="Atari7800">Atari 7800</option>
            <option value="GameGear">Sega Game Gear</option>
            <option value="MasterSystem">Sega Master System</option>
            <option value="TurboGrafx16">TurboGrafx-16</option>
            <option value="Commodore64">Commodore 64</option>

            <!-- Agrega más opciones de consolas según sea necesario -->
        </select>
    </div>

    <div class="mb-3">
        <label for="mensaje" class="form-label">Mensaje:</label>
        <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
    </div>

    <button style="margin-bottom: 10px" type="submit" class="btn btn-primary">Guardar Reserva</button>
    <a style="margin-bottom: 10px" href="/reservas" class="btn btn-secondary">Cancelar</a>
</form>


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop