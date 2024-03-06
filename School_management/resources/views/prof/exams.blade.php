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
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('examens.store') }}" method="POST" class="row">
        @csrf
        <div class="col-md-6 mb-5">
            <input type="text" name="titre" placeholder="Title" class="form-control" required>
        </div>
        <input type="hidden"  name="module" value="{{ $module->Nom }}">
        <div class="col-md-6">
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="col-md-6 mb-5">
            <input type="text" name="disc" placeholder="Description" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="text" name="heur" placeholder="Hour" class="form-control" required>
        </div>
        <div class="col-md-12">
            <center>
                <button type="submit" class="btn text-white col-3" style="background-color: #f5a425">Add</button>
            </center>
        </div>
    </form>

</div>
@endsection
