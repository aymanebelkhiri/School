@extends('header')

@section('titre', 'LoginS')

@section('content')
<br><br><br><br><br><br><br>
<section>
    <form action="{{route('password.store')}}" method="post">
        @csrf
        
        <h3>your Email: </h3><br><br>
        <input type="email" class="form-control" placeholder="email" name="Email"><br>
        <button type="submit" class="btn btn-primary"> send new password </button>
    </form>
</section>