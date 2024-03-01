@extends('layout')
@section('title', 'Modules Table')
@section('content')

<div class="container mt-5">
    <br><br><br>
    <h1 class="text-center">Modify Student</h1>

    <form action="{{ route('etudiants.update', $etudiant->id_etudiant) }}" method="POST">
        @csrf
        @method('PUT') 
        <div class="mb-3">
            <label for="Matricule" class="form-label">Matricule</label>
            <input type="number" class="form-control" id="Matricule" name='Matricule' value="{{ $etudiant->Matricule }}">
        </div>
        <div class="mb-3">
            <label for="Nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name='Nom' value="{{ $etudiant->Nom }}">
        </div>

        <div class="mb-3">
            <label for="Prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="Prenom" name='Prenom' value="{{ $etudiant->Prenom }}">
        </div>

        <div class="mb-3">
            <label for="DateNaissance" class="form-label">DateNaissance</label>
            <input type="date" class="form-control" id="nom" name='DateNaissance' value="{{ $etudiant->DateNaissance }}">
        </div>

        <div class="mb-3">
            <label for="Age" class="form-label">Age</label>
            <input type="number" class="form-control" id="Age" name='Age' value="{{ $etudiant->Age }}">
        </div>

        <div class="mb-3">
            <label for="nom" class="form-label">Email</label>
            <input type="email" class="form-control" id="nom" name='Email' value="{{ $etudiant->Email }}">
        </div>

        <div class="mb-3">
            <label for="Groupe" class="form-label">Groupe</label>
            <select  class="form-control" id="Groupe" name='Groupe'>
             @isset($Groupes)
             @foreach ($Groupes as $Groupe )
             <option value='{{$Groupe->id_groupe}}'>{{$Groupe->id_groupe}}</option>
             @endforeach
             @endisset
            </select>   
        </div>

        <div class="mb-3">
            <label for="Sexe" class="form-label">Sexe</label>
            <select  class="form-control" id="Sexe" name='Sexe'>
                <option value='Male'>Male</option>
                <option value='Female'>Female</option>
            </select>   
        </div>

        <div class="mb-3">
            <label for="Groupe" class="form-label">Groupe</label>
            <select  class="form-control" id="Groupe" name='Groupe'>
             @isset($Groupes)
             @foreach ($Groupes as $Groupe )
             <option value='{{$Groupe->id_groupe}}'>{{$Groupe->id_groupe}}</option>
             @endforeach
             @endisset
            </select>   
        </div>

        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="number" class="form-control" id="Password" name='Password' value="{{ $etudiant->Password }}">
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>

</div>

@endsection

