@extends('layouts.plantilla')

@section('title', 'Buscar Empresa')

@section('content')
<div id=content>
    <h1 id=h1>SOPORTE TECNICO</h1>
    <h1 ID=h3>Buscar empresa</h1>


    {{-- action="{{ route('companies.index') }}"  --}}
    <form method="GET" action="{{ route('companies.index') }}" id=form>
        <label for="tipo_documento">Tipo de Documento:</label>
        <select name="tipo_documento" id="tipo_documento">
            <option value="document_type">Selecciona un Tipo de Documento</option>
            @foreach ($documentos as $documento)
                <option value="{{ $documento->id }}">{{ $documento->nombre }}</option>
            @endforeach
        </select>
        <br></br>
        <label for="tipo_documento">Buscar por número de documento:</label>
        <input type="text" id="numero_documento" name="numero_documento">
        <button type="submit" >Buscar</button>
        
    </form>
</div>


{{-- <form action="{{ route('index') }}" method="GET">
    @csrf
    <label for="tipo_documento">Buscar por número de documento:</label>
    <input type="text" id="numero_documento" name="numero_documento">
    <button type="submit">Buscar</button>
</form> --}}





