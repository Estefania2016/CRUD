@extends('layouts.plantilla')

@section('title', 'Resultado de la búsqueda')

@section('content')
<div id="content">
    
    <h1 id="h1">SOPORTE TÉCNICO</h1>
    
    <h2>Empresa Encontrada</h2>
    
    <ul id="table">
        <table>
            <thead>
                <tr>
                    <th>Nombre Empresa</th>
                    <th>Número de Documento</th>
                    <th>Dirección</th>
                    <th>Plataformas</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                @if($empresas)
                    <tr>
                        <td>{{ $empresas->name_company }}</td>
                        <td>{{ $empresas->number_doc }}</td>
                        <td>{{ $empresas->address }}</td>
                        <td>{{ $empresas->platforms }}</td>
                        <td>{{ $empresas->Phone }}</td>
                        <td>{{ $empresas->email }}</td>
                    </tr>
                @else
                    <tr>
                        <td colspan="6">No se encontró ninguna empresa con el número de documento especificado.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <br><br>
    </ul>
</div>
    
<div id="contenedor-button">
    {{-- Dirección para crear ticket --}}
    @if($empresas)
        <a href="{{ route('tickets.create', ['number_doc' => $empresas->number_doc]) }}" class="btn btn-success" id="button">Crear Ticket</a>
    @endif

    {{-- Dirección para consultar ticket --}}
    <a href="{{ route('tickets.consult') }}" class="btn btn-info" id="button">Consultar Ticket</a>

    {{-- Dirección para actualizar información de la empresa --}}
    <a href="{{ route('documenttypes.index', ['company' => $empresas->id]) }}" class="btn btn-info" id="button">Actualizar</a>

    {{-- Dirección para volver al inicio --}}
    <a href="{{ route('documenttypes.index') }}" class="btn btn-secondary" id="button">Volver al Inicio</a>
</div>
@endsection
