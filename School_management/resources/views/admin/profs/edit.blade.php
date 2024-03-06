@extends('admin.header')
@section('adminContent')
<br><br><br><br><br>
<center><h1><i>Modifier un proffesseur</i></h1></center>
<form action="{{ route('profs.update',$Prof->id_prof) }}" method='PUT'>
    @csrf
@method('PUT')
   
  <div class="mb-3">
    <label for="nom" class="form-label">Nom </label>
    <input type="text" class="form-control" id="nom" name='nom' value="{{$Prof->Nom}}">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom </label>
    <input type="text" class="form-control" id="prenom" name='prenom' value="{{$Prof->Prenom}}">
  </div>
    <label for="sexe" class="form-label">Sexe </label>
    <input type="text" class="form-control" id="sexe" name='sexe' value="{{$Prof->Sexe}}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email </label>
    <input type="email" class="form-control" id="email" name='email' value="{{$Prof->Email}}">
</div>
  <div class="mb-3">
    <label for="S" class="form-label">Modules</label>
    <select  class="form-control" id="S" name='groupe' value="{{$Prof->Groupe}}">
        @isset($Modules)
        @foreach ($Modules as $Module )
          <option value='{{$Module->Nom}}'>{{$Module->Nom}}</option>
        @endforeach
        @endisset
    </select>      
  </div>
  <button type="submit" class="btn btn-primary">Modifier</button>
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT"> 
</form>
