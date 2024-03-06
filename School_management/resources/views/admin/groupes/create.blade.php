@extends('admin.header')
@section('adminContent')
<br><br><br><br><br>
<center><h1><i>Ajouter un groupe</i></h1></center>

@if(isset($MessageSuccess))
<div style='color:green'>{{$MessageSuccess}}</div>
@endif
@if(isset($MessageEchec))
<div style='color:red'>{{$MessageEchec}}</div>
@endif

<form action="{{ route('groupes.store') }}" method="POST">
        @csrf
  <div class="mb-3">
    <label for="nom" class="form-label">Nom </label>
    <input type="text" class="form-control" id="nom" name='Nom'>
  </div>
  <div class="mb-3">
    <label for="Effectif" class="form-label">Effectif </label>
    <input type="number" class="form-control" id="prenom" name='Effectif'>
  </div>
  <div class="mb-3">
    <label for="S" class="form-label">Filiére</label>
    <select  class="form-control" id="S" name='filiére'>
        @isset($Filiéres)
        @foreach ($Filiéres as $item )
          <option value='{{$item->idFiliére}}'>{{$item->Nom}}</option>
        @endforeach
        @endisset
    </select>      
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>