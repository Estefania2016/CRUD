@extends('layouts.plantilla')

@section('title', 'Consultar ticket')

@section('content')


<div id=content>
    <h1 id=h1>SOPORTE TECNICO</h1>

<!-- Formulario para realizar la consulta -->
    <form action="{{ route('tickets.doConsult') }}" method="GET" id=form>
        @csrf
        <!-- Campo para ingresar el ID del ticket -->
        <div>
            <label for="ticket_id">ID del Ticket:</label>
            <input type="text" id="ticket_id" name="ticket_id">
        </div>
        <!-- Agrega más campos según tus necesidades para refinar la consulta -->
        <button type="submit">Consultar</button>
    </form>

    <!-- Botón para volver a la página anterior -->
    <a href="{{ route('documenttypes.index') }}" class="btn btn-secondary" id="button">Volver al Inicio</a>

</div>
