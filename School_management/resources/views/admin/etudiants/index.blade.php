@extends('admin.header')
@section('adminContent')
<div>
        <center><h1><i>Liste des etudiants</i></h1></center><br>
        <a href="{{ route('etudiants.create') }}" class='btn btn-primary'> Ajouer etudiant</a>
        <br><br>
        @if(isset($success))
        <div style='background-color:green'>{{$success}}</div>
        @endif

        @if(session('Echec'))
        <div style='background-color:green'>{{session('Echec')}}</div>
        @endif
        <table class='table table-striped'>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Nom </th>
                <th scope='col'>Prenom</th>
                <th scope='col'>Date de naissance</th>
                <th scope='col'>Age</th>
                <th scope='col'>Sexe</th>
                <th scope='col'>Groupe</th>
                <th scope='col'>Action</th>
            </tr>
            @if(isset($Etudiants))
            @foreach($Etudiants as $Etudiant)
            <tr>
                <td class='table-primary'>{{$Etudiant->id_etudiant}}</td>
                <td class='table-primary'>{{$Etudiant->Nom}}</td>
                <td class='table-primary'>{{$Etudiant->Prenom}}</td>
                <td class='table-primary'>{{$Etudiant->DateNaissance}}</td>
                <td class='table-primary'>{{$Etudiant->Age}}</td>
                <td class='table-primary'>{{$Etudiant->Sexe}}</td>
                <td class='table-primary'>{{$Etudiant->Groupe}}</td>
                <td class='table-primary'>
                <a href="{{ route('etudiants.destroy', $Etudiant->id_etudiant) }}" class="btn btn-danger">Supprimer</a>
                <a href="{{ route('etudiants.edit', $Etudiant->id_etudiant) }}" class='btn btn-success'>Modifier</a>   
                    <form id="delete-form-{{$Etudiant->id_etudiant}}" action="{{ route('etudiants.destroy', $Etudiant->id_etudiant) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>   
            @endforeach
            @endif
        </table> 
    </div> 
@endsection