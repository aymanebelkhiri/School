@extends('etudiant.header')
@section('contentStudent')
<article>
    <br><br>
    <div class="text-center"> 
        <h1><i>Message Your Teacher</i></h1>
        <h5>Choose your teacher</h5>
        @if(isset($ProfEmails))
        <select class="form-select" name='email' aria-label="Default select example">
            <option selected>Teacher</option>
            @foreach($ProfEmails as $Email)
            <option value="{{$Email}}">{{$Email}}</option>
            @endforeach
        </select>
        @endif
    </div>
</article>
@endsection
