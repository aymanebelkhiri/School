@extends('etudiant.header')
@section('contentStudent')
@php
    use App\Models\Etudiant;
    $etudiant = Etudiant::findOrFail(Auth::user()->id);

@endphp
<<<<<<< HEAD
=======
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    @if(isset($etudiant))
    <a class="navbar-brand" href="/Notes/{{$etudiant->id_etudiant}}">Notes</a> <!-- Corrected the route syntax -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('Exams') }}">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Emploi</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Message
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Prof</a></li>
            <li><a class="dropdown-item" href="#">Secretay</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
>>>>>>> e330b5ef16ec2852a9343c8984fb019ab194757d

<style>
  .total{
    width: 1550px;
    margin: auto;
    text-align: center;
  }
</style>


<div class="container total">
  <center><h1>Personal Information</h1></center><br><br>
  <div class="row">
    <div class="col-md-6">
      <p><strong>Matricule:</strong> {{$etudiant->Matricule}}</p>
      <p><strong>Nom:</strong> {{$etudiant->Nom}}</p>
      <p><strong>Sexe:</strong> {{$etudiant->Sexe}}</p>
    </div>
    <div class="col-md-6">
      <p><strong>Prénom:</strong> {{$etudiant->Prenom}}</p>
      <p><strong>Age:</strong> {{$etudiant->Age}}</p>
      <p><strong>Date de naissance:</strong> {{$etudiant->DateNaissance}}</p>
    </div>
  </div>
</div>
<<<<<<< HEAD


=======
@endif
>>>>>>> e330b5ef16ec2852a9343c8984fb019ab194757d
@endsection
