@extends('layouts.plantilla')

@section('title', 'Buscar Empresa')

@section('content')


<div id=content>

    <h1 id=h1>SOPORTE TECNICO</h1>
    <h2 id=h3>Detalle del Ticket</h2>
    @if($ticket)
        <div id=table>
        
            <table>
                <!-- Encabezados de la tabla -->
                <tr>
                    <th>ID</th>
                    <th>Incidencia</th>
                    <th>Empresa</th>
                    <th>Observaciones</th>
                    <th>Estado</th>
                    <th>Solución</th>
                   
                </tr>
                <!-- Mostrar los resultados de la consulta -->
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->incidences_id}}</td>
                    <td>{{ $ticket->companies_id}}</td>
                    <td>{{ $ticket->observations }}</td>
                    <td>{{ $ticket->state ? 'Activo' : 'Inactivo' }}</td>
                    <td>{{ $ticket->phone_solution }}</td>
                    
                </tr>
            </table>
        </div>
    
    @else
    <p>No se encontraron resultados para el ID del ticket proporcionado.</p>
    @endif

    <!-- Botón para volver a la página de consulta -->
    <a href="{{ route('tickets.consult') }}" class="button">Volver a Consultar</a>

</div>


