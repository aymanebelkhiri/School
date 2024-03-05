<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>
@extends('header')
@section('content')
<body>
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            @if(isset($events))
                @foreach($events as $event)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$event->Title}}</h5>
                                <p class="card-text">{{$event->Description}}</p>
                                <a href="#" class="btn btn-primary">{{$event->Date}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>
@endsection
</html>
