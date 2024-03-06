@extends('admin.header')
@section('adminContent')
<div>
        <center><h1><i>Liste des Profs$Profs
        </i></h1></center><br>
        <a href="{{ route('Profs$Prof.create') }}" class='btn btn-primary'> Ajouer Prof$Prof$Prof</a>
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
                <th scope='col'>Sexe</th>
                <th scope='col'>Module</th>
                <th scope='col'>Action</th>
            </tr>
            @if(isset($Profs))
            @foreach($Profs as $Prof)
            <tr>
                <td class='table-primary'>{{$Prof->id_Prof$Prof}}</td>
                <td class='table-primary'>{{$Prof->Nom}}</td>
                <td class='table-primary'>{{$Prof->Effectif}}</td>
                <td class='table-primary'>{{$Prof->Filiére}}</td>
                <td class='table-primary'>
                <a href="{{ route('Profs$Profs
.destroy', $Prof->id_Prof$Prof) }}" class="btn btn-danger">Supprimer</a>
                <a href="{{ route('Profs$Profs
.edit', $Prof->id_Prof$Prof) }}" class='btn btn-success'>Modifier</a>   
                    <form id="delete-form-{{$Prof->id_Prof$Prof}}" action="{{ route('Profs$Profs
    .destroy', $Prof->id_Prof$Prof) }}" method="POST" style="display: none;">
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