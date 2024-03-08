@extends('admin.header')
@section('adminContent')
<br><br><br><br><br>
 <!-- @php
   use App\Models\Events;
   use Illuminate\Support\Facades\DB;
   $Event = DB::table('events')->where('id_event',$id)->first();
   echo $Event->id_event
   @endphp -->
<center><h1><i>Modifier un event </i></h1></center>
<form action="{{ route('events.update',$Event->id_event)}}" methos='POST'>
@csrf
@method('PUT')

    @if(session('fail'))
    <div style='background-color:red'>{{ session('fail') }}</div>
    @endif

    <div class="mb-3">
    <label for="Title" class="form-label">Title </label>
    <input type="text" class="form-control" id="Title" name='Title' value="{{$Event->Title}}" >
  </div>
  <div class="mb-3">
    <label for="Description" class="form-label">Description </label>
    <input type="text" class="form-control" id="Description" name='Description' value="{{$Event->Description}}">
  </div>
  <div class="mb-3">
    <label for="Date" class="form-label">Date </label>
    <input type="date" class="form-control" id="Date" name='Date' value="{{$Event->Date}}">
  </div>
  <div class="mb-3">
    <label for="Photo" class="form-label">Photo </label>
    <input type="file" class="form-control" id="Photo" name='Photo' value="{{$Event->photo}}">
  </div> 
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>