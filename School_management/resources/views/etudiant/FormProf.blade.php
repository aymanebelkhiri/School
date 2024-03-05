@extends('etudiant.header')
@section('contentStudent')
<article>
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

</article>
@endsection
