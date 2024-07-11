@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Crear Apuesta</h1>
    <form action="{{ route('apuestas.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="form-group">
            <label for="id_juego">Juego</label>
            <select name="id_juego" id="id_juego" class="form-control" required>
                @foreach($juegos as $juego)
                    <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
            </select>
            <div class="invalid-feedback">
                Por favor, selecciona un juego.
            </div>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="datetime-local" name="fecha" id="fecha" class="form-control" required>
            <div class="invalid-feedback">
                Por favor, ingresa una fecha.
            </div>
        </div>
        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" name="monto" id="monto" class="form-control" required>
            <div class="invalid-feedback">
                Por favor, ingresa un monto.
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <script>


   
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
