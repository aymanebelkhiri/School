<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message to prof</title>
    <style>
        .select-container {
            width: 50%; 
            margin-right: 0 auto; 
        }
    </style>    
</head>
@extends('layouts.app')
    @section('content')
    @extends('etudiant.header')
    @section('contentStudent')
<body>
    <br><br><br><br>
   <center><h1><i>Message Your Teacher</i></h1></center>
   <h5>Choose your teacher</h5>
   @if(isset($ProfEmails))
   <select class="form-select" name='email' aria-label="Default select example">
    <option selected>Teacher</option>
    @foreach($ProfEmails as $Email)
    <option value="{{$Email}}">{{$Email}}</option>
    @endforeach
    @endif
</select>

</body>
</html>