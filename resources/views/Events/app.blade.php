@extends('layout')
@section('title', 'Events')

@section('content')
<div class="container mt-5">
    <br><br><br>
    <h1 class="text-center">Events</h1>
        <div class="row">
            @foreach($eve as $event)
                <div class="col-md-4"> <!-- Adjust the column size based on your design -->
                    <div class="card mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->Title }}</h5>
                            <p class="card-text">{{ $event->Description }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $event->Date }}</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @isset($MessageSuccess)
            @isset($MessageEchec)
            <div style='color:green'>{{MessageSucess}}</div>
            <div style='color:red'>{{$MessageEchec}}</div>
            @endisset
            @endisset
        </div>
    </div>
@endsection
