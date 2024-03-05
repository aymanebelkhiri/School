@extends('prof.header')
@section('contentStudent')
@php
    use App\Models\Prof;
    use App\Models\Module;
    $prof = Prof::findOrFail(Auth::user()->id);
    $module = Module::findOrFail($prof->Module);
@endphp




<style>
    .total{
        width: 1550px;
        margin: auto;
        text-align: center;
    }
</style>


<div class="container total">
    <center><h1>Add Date Examen</h1></center><br><br>
    <form action="{{route('')}}" method="post">
        <input type="date" class="form-control">
        <input type="text" class="form-control">
    </form>
    <div class="row">
        <div class="col-md-6">
            <p><strong>Email:</strong> {{$prof->Email}}</p>
            <p><strong>Nom:</strong> {{$prof->Nom}}</p>
            <p><strong>Sexe:</strong> {{$prof->Sexe}}</p>
            </div>
            <div class="col-md-6">
            <p><strong>Prénom:</strong> {{$prof->Prenom}}</p>
            <p><strong>Module:</strong> {{$module->Nom}}</p>
        </div>
    </div>
</div>
@endsection
