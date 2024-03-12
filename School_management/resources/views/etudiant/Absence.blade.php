@extends('etudiant.header')
@section('contentStudent')
<center><h1><i>Absence</i></h1></center>
<table border='0' class='table table-striped text-center'>
     <tr>
        <th scope='col'>Date</th>
        <th scope='col'>Etudiant</th>
        <th scope='col'>Masse Horaire</th>
        <th scope='col'>Justifiée</th>
     </tr>
     @foreach($Absence as $absence)
       <tr>
          <th class='table-primary'>{{$absence->Date}}</th>
          <th class='table-primary'>{{$absence->Etudiant}}</th>
          <th class='table-primary'>{{$absence->MasseHoraire}}</th>
          <th class='table-primary'>{{$absence->Justifiée}}</th>
       </tr>  
     @endforeach

</table>        

        
