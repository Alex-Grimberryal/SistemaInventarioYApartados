<x-head-component></x-head-component>
<x-sidebar></x-sidebar>
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            <h2>Ambientes</h2>
        </div>
        <div class="col-md-10 text-right">
            <a href="#" class="btn btn-primary">Añadir</a>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Ambiente</th>
                        <th>Ambiente</th>
                        <th>Pabellón</th>
                        <th>Piso</th>
                        <th>Fecha de Creación</th>
                        <th>Fecha de Actualización</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ejemplo Ambiente</td>
                        <td>Ejemplo Pabellón</td>
                        <td>Ejemplo Piso</td>
                        <td>2021-01-01 10:00:00</td>
                        <td>2021-01-01 10:00:00</td>
                    </tr>
                    <!-- Puedes agregar más filas aquí con los datos correspondientes -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
<x-footer-component></x-footer-component>
