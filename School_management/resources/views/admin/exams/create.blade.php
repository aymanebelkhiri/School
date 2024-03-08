@extends('admin.header')
@section('adminContent')
<br><br><br><br><br><br>
<center><h1><i>Ajouter un exam</i></h1></center><br><br>

    
     <form action="{{ route('exams.store') }}" method="POST">
        @csrf
    <div class="mb-3">
    <label for="Titre" class="form-label">Titre </label>
    <input type="text" class="form-control" id="Titre" name='Titre'>
  </div>
  <div class="mb-3">
    <label for="Description" class="form-label">Description </label>
    <input type="text" class="form-control" id="Description" name='Description'>
  </div>
  <div class="mb-3">
    <label for="Date" class="form-label">Date </label>
    <input type="date" class="form-control" id="Date" name='Date'>
  </div>
  <div class="mb-3">
    <label for="heure" class="form-label">heure </label>
    <input type="time" class="form-control" id="Heure" name='heure'>
  </div>
  <div class="mb-3">
    <label for="Module" class="form-label">Module </label>
    <input type="text" class="form-control" id="Module" name='Module'>
  </div>
  
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>