@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de Apuestas</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Juego</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($apuestas as $apuesta)
                    <tr>
                        <td>{{ $apuesta->id }}</td>
                        <td>{{ $apuesta->juego->nombre }}</td>
                        <td>{{ $apuesta->fecha }}</td>
                        <td>{{ $apuesta->monto }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
