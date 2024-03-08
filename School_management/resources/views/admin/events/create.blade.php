@extends('admin.header')
@section('adminContent')
<br><br><br><br><br><br>
<center><h1><i>Ajouter un evenement</i></h1></center><br><br>

    @if(session('fail'))
    <div style='background-color:red'>{{ session('fail') }}</div>
    @endif
    
     <form action="{{ route('events.store') }}" method="POST">
        @csrf
    <div class="mb-3">
    <label for="Title" class="form-label">Title </label>
    <input type="text" class="form-control" id="Title" name='Title'>
  </div>
  <div class="mb-3">
    <label for="Description" class="form-label">Description </label>
    <input type="text" class="form-control" id="Description" name='Description'>
  </div>
  <div class="mb-3">
    <label for="DE" class="form-label">Date Event </label>
    <input type="date" class="form-control" id="DE" name='date'>
  </div>
  <div class="mb-3">
    <label for="Photo" class="form-label">Photo </label>
    <input type="file" class="form-control" id="Photo" name='Photo'>
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>