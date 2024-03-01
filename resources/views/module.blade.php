@extends('layout')
@section('title', 'Modules Table')
@section('content')

<div class="container mt-5">
    <br><br><br>
    <h1 class="text-center">Modules Table</h1>

    <table class="table table-lg table-bordered mx-auto mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Masse Horaire</th>
                <th scope="col">Coefficient</th>
                <th scope="col">Filiere</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modules as $module)
            <tr>
                <td>{{ $module->id_module }}</td>
                <td>{{ $module->Nom }}</td>
                <td>{{ $module->MasseHoraire }}</td>
                <td>{{ $module->Coefficient }}</td>
                {{-- <td>{{ $module->filiere- }}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
