@extends('admin.header')0
@section('adminContent')
<body>
    <br><br><br><br><br><br>
    <div class="container">
        <center><h1><i>Les evenements</i></h1></center>
        <br><br><br><br>
        <a href="{{ route('events.create')}}" class="btn btn-primary">Ajouter un event</a>

        @if(session('success'))
        <div style='background-color:green;padding:20px'>
        @endif 
        <div class="row">
            @if(isset($Events))
                @foreach($Events as $Event)
                    <div class="col-md-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$Event->Title}}</h5>
                                <p class="card-text">{{$Event->Description}}</p>
                                <h6>{{$Event->Date}}</h6>
                                <a href="{{ route('events.edit', $Event->id_event) }}" class='btn btn-success'>Modifier</a>   
                                  <form id="delete-form-{{$Event->id_event}}" action="{{ route('events.destroy', $Event->id_event) }}" method="POST" style="display: inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Supprimer</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
