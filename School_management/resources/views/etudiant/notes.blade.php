<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
    @extends('header')
    @section('content')
<body>
    <br><br><br><br><br>
    <center><h1><i>My notes</i></h1></center>
    <table class='table table-striped' <>
    <tr>
        <th scope='col'>Module</th>
@if(isset($modulesAvecNotes))
    @foreach($modulesAvecNotes as $nomModule => $notes)
        @php
            $alreadyPrintedTitles = [];
        @endphp
        @foreach($notes as $note)
            @if (in_array($note->Title, $alreadyPrintedTitles))
               @continue;
            @else
                <th scope='col'>{{ $note->Title }}</th>
                @php
                    $alreadyPrintedTitles[] = $note->Title;
                @endphp
            @endif
        @endforeach
    @endforeach
@endif


    </tr>
    @if(isset($modulesAvecNotes))
        @foreach($modulesAvecNotes as $nomModule => $notes)
            <tr>
                <td class='table-primary'>{{ $nomModule }}</td>
                @foreach($notes as $index => $note)
                    @if($index > 0)
                
                    @endif
                    <td class='table-primary'>{{ $note->Valeur }}</td>
                    
                @endforeach
            </tr>
        @endforeach
    @endif
</table>


</body>
    @endsection
</html>