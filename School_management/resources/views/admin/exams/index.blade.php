@extends('admin.header')
@section('adminContent')
<div>
        <center><h1><i>Liste des exams</i></h1></center><br>
        <a href="{{ route('exams.create') }}" class='btn btn-primary'> Ajouer Exam</a>
        <br><br>
        @if(isset($success))
        <div style='background-color:green'>{{$success}}</div>
        @endif

        @if(session('Echec'))
        <div style='background-color:green'>{{session('Echec')}}</div>
        @endif
        <table class='table table-striped'>
            <tr>
                <th scope='col'>Id</th>
                <th scope='col'>Titre </th>
                <th scope='col'>Description</th>
                <th scope='col'>Date et Heure</th>
                <th scope='col'>Module</th>
                <th scope='col'>Action</th>
            </tr>
            @if(isset($Exams))
            @foreach($Exams as $Exam)
            <tr>
                <td class='table-primary'>{{$Exam->id_exam}}</td>
                <td class='table-primary'>{{$Exam->titre}}</td>
                <td class='table-primary'>{{$Exam->disc}}</td>
                <td class='table-primary'>{{$Exam->Date}} {{$Exam->heur}}</td>
                <td class='table-primary'>{{$Exam->Module}}</td>
                <td class='table-primary'>

                <a href="{{ route('exams.edit', $Exam->id_exam) }}" class='btn btn-success'>Modifier</a>   
                <form id="delete-form-{{$Exam->id_exam}}" action="{{ route('exams.destroy', $Exam->id_exam) }}" method="POST" style="display: inline;">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                </td>
            </tr>   
            @endforeach
            @endif
        </table> 
    </div> 
@endsection