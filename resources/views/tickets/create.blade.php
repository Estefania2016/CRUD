@extends('layouts.plantilla')

@section('title', 'Crear Ticket')

@section('content')
    <div id="content">
        <h1 id="h1">SOPORTE TÉCNICO</h1>
        <h1 id="h2">Crear Ticket</h1>
        
        <!-- Agregar mensaje de éxito aquí -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div id="form">
            <form action="{{ route('tickets.store') }}" method="POST">
                @csrf

                <div>
                    <label for="empresa">Empresa</label>
                    <input type="text" name="empresa" value="{{ $empresas->name_company }}" readonly>
                    <input type="hidden" name="empresa_id" value="{{ $empresas->id }}">
                </div>

                <div>
                    <label for="incidences_id">Incidencia</label>
                    <select name="incidences_id" id="incidences_id">
                        <option value="">Seleccione Tipo Incidencia</option>
                        @foreach($incidencias as $incidencia)
                            <option value="{{ $incidencia->id }}">{{ $incidencia->error_types }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="observations">Observaciones</label>
                    <input type="text" name="observations" style="width: 300px; font-size: 14px;">
                </div>

                <div>
                    <label for="state">Estado</label>
                    <select id="state" name="state">
                        <option value="">Seleccione estado final del ticket</option>
                        <option value="Abierto">Abierto</option>
                        <option value="Cerrado">Cerrado</option>
                        <option value="Pendiente">Pendiente</option>
                        <!-- Agrega más opciones según sea necesario -->
                    </select>
                </div>

                <div>
                    <label for="phone_solution">Solucionó en llamada?</label>
                    {{-- <input type="text" name="phone_solution" style="width: 300px; font-size: 14px;"> --}}
                    <input type="checkbox" id="state" name="state_checkbox" value="1">
                    <input type="hidden" name="state" value="0">
                </div>

                <button onclick="showSuccessAlert()" type="submit">Guardar</button>
            </form>
        </div>
    </div>
        <script>
        function showSuccessAlert() {
            alert('¡Datos guardados correctamente! 1000');
        }
        </script>
    <a href="{{ route('documenttypes.index') }}" class="btn btn-secondary" id="button">Volver al Inicio</a>
@endsection
