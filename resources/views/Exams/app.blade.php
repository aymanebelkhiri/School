@extends('layout')
@section('title', 'Exams')

@section('content')
<div class="container mt-5">
    <br><br><br>
    <h1 class="text-center">Exams</h1>
        <div class="row">
        <table class='table table-striped'>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Nom Module</th>
                <th scope='col'>Date</th>
                <th scope='col'>Action</th>
            </tr>
            @if(isset($Exams))
            @foreach($Exams as $Exam)
            <tr>
                <td class='table-primary'>{{$Exam->id_exam}}</td>
                <td class='table-primary'>{{$Exam->Module}}</td>
                <td class='table-primary'>{{$Exam->Date}}</td>
                <td class='table-primary'>
                <a href="{{ route('exams.destroy', $Exam->id_exam) }}"
                     onclick="event.preventDefault(); document.getElementById('delete-form-{{$Exam->id_exam}}').submit();"
                     class="btn btn-danger">Supprimer</a>
                <a href="{{ route('exams.edit', $Exam->id_exam) }}" class='btn btn-success'>Modifier</a>   
                    <form id="delete-form-{{$Exam->id_exam}}" action="{{ route('exams.destroy', $Exam->id_exam) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>   
            @endforeach
            @endif
           
    </div>
@endsection
