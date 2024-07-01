@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Listado de Contactos</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Asunto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->nombre }}</td>
                        <td>{{ $contact->correo }}</td>
                        <td>{{ $contact->telefono }}</td>
                        <td>{{ $contact->asunto }}</td>
                        <td>
                            <a href="{{ route('contacto.show', $contact->id) }}" class="btn btn-primary btn-sm">Ver</a>
                            <a href="{{ route('contacto.edit', $contact->id) }}" class="btn btn-info btn-sm">Editar</a>
                            {{-- Agrega un formulario para eliminar si es necesario --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
