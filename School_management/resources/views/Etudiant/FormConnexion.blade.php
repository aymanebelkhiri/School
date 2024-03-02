@extends('header')

@section('titre', 'LoginS')

@section('content')
<br><br><br><br>
<div>

<center><h1>Se connecter</h1></center>

       <form action='/etudiant' method='POST'>
       @csrf 
              
              <div class="mb-3">
                     <label for="email" >Email</label>
                     <input type="text" class="form-control" id="Email" name='Email' >
              </div>
              @if(isset($error))
              <div style='color:red'>{{$error}}</div>
              @endif
              <div class="mb-3">
                     <label for="password">Mot de passe</label>
                     <input type="password" class="form-control" id="password" name='Password'>
              </div>
              <a href='{{route("password.index")}}'>Forget password ?</a>
              <button type="submit" class="btn btn-primary">Se connecter</button>
       </form>