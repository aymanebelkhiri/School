@extends('layout')
@section('title', 'etudiants')
@section('content')

<div class="container mt-5">
    <br><br><br>
    <h1 class="text-center">Students Table</h1>

    <table class="table table-lg table-bordered mx-auto mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Matricule</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Sexe</th>
                <th scope="col">Email</th>
                <th scope="col">Groupe</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($Etudiants))
            @foreach($Etudiants as $Etu)
            <tr>
                <td>{{ $Etu->id_etudiant }}</td>
                <td>{{ $Etu->Matricule }}</td>
                <td>{{ $Etu->Nom }}</td>
                <td>{{ $Etu->Prenom }}</td>
                <td>{{ $Etu->Age }}</td>
                <td>{{ $Etu->Sexe }}</td> 
                <td>{{ $Etu->Email }}</td> 
                <td>{{ $Etu->Groupe }}</td> 
                <td>
                    <a href="{{ route('etudiants.destroy', $Etu->id_etudiant) }}" class="btn btn-danger">Supprimer</a>
                    <a href="{{ route('etudiants.edit', $Etu->id_etudiant) }}" class='btn btn-success'>Modifier</a>   
                    <form id="delete-form-{{$Etu->id_etudiant}}" action="{{ route('etudiants.destroy', $Etu->id_etudiant) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>     
            </tr>
            @endforeach
            @endif

            @isset($MessageS)
            <div class="alert alert-danger" role="alert">
                {{ $MessageS }}
            </div>
            @endisset

            @isset($MessageE)
            <div class="alert alert-danger" role="alert">
                {{ $MessageE }}
            </div>
            @endisset

        </tbody>
    </table>
</div>
@endsection
