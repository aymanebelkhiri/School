@extends('header')
<br>
<br>
<br>
<br>
<br>
<br>
@section('title', 'All Modules')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">All Modules</h1>
            <ul class="list-group">
                @foreach($modules as $module)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>{{ $module->Nom }}</h3>
                                <p>{{ $module->description }}</p>
                            </div>
                            <div>
                                <p>Price: ${{ $module->price }}</p>
                                <form action="{{ route('Courses.purchase', $module->id_module) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-sm">Buy Now</button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
