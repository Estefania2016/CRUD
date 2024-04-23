@extends('layouts.plantilla')

@section('title', 'Editar Empresa')

@section('content')
<div id="content">
    <h1 id="h1">SOPORTE TÉCNICO</h1>
    <h2>Editar Empresa</h2>
    <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name_company">Nombre Empresa:</label>
        <input type="text" id="name_company" name="name_company" value="{{ $company->name_company }}" required>

        <label for="number_doc">Número de Documento:</label>
        <input type="text" id="number_doc" name="number_doc" value="{{ $company->number_doc }}" required>

        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" value="{{ $company->address }}" required>

        <label for="platforms">Plataformas:</label>
        <input type="text" id="platforms" name="platforms" value="{{ $company->platforms }}" required>

        <label for="Phone">Teléfono:</label>
        <input type="text" id="Phone" name="Phone" value="{{ $company->Phone }}" required>

        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" value="{{ $company->email }}" required>

        <button type="submit">Actualizar Empresa</button>
    </form>

    <a href="{{ route('companies.index') }}" class="btn btn-secondary" id="button">Volver al Inicio</a>
</div>
@endsection


{{-- @extends('layouts.plantilla')

@section('title', 'Editar Empresa')

@section('content')
<div id="content">
    <h1 id="h1">SOPORTE TÉCNICO</h1>
    <h2>Editar Empresa</h2>

    <!-- Alerta de éxito -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name_company">Nombre Empresa:</label>
        <input type="text" id="name_company" name="name_company" value="{{ $company->name_company }}" required>

        <label for="number_doc">Número de Documento:</label>
        <input type="text" id="number_doc" name="number_doc" value="{{ $company->number_doc }}" required>

        <label for="address">Dirección:</label>
        <input type="text" id="address" name="address" value="{{ $company->address }}" required>

        <label for="platforms">Plataformas:</label>
        <input type="text" id="platforms" name="platforms" value="{{ $company->platforms }}" required>

        <label for="Phone">Teléfono:</label>
        <input type="text" id="Phone" name="Phone" value="{{ $company->Phone }}" required>

        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" value="{{ $company->email }}" required>

        <button type="submit" onclick="showSuccessAlert()">Actualizar Empresa</button>
    </form>

    <a href="{{ route('documenttypes.index') }}" class="btn btn-secondary" id="button">Volver al Inicio</a>
</div>

<!-- Script de JavaScript para mostrar la alerta -->
<script>
    function showSuccessAlert() {
        alert('Se ha actualizado la empresa exitosamente.');
    }
</script>
@endsection --}}
