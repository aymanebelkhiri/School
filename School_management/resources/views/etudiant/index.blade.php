@extends('header')
@section('content')
<br><br><br>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/notes/1">Notes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/exams">Exams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Emploi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/events">Events</a>
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

<center><h1><i>Informations personnelles</i></h1></center>
   <h5>Nom</h5>      <h5>Prenom</h5>

@endsection