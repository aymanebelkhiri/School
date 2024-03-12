@extends('header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Créer un module</div>

                    <div class="card-body">
                        <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="Nom">Nom</label>
                                <input type="text" class="form-control" id="Nom" name="nom">
                            </div>

                            <div class="form-group">
                                <label for="MasseHoraire">Masse Horaire</label>
                                <input type="text" class="form-control" id="MasseHoraire" name="masseHoraire">
                            </div>

                            <div class="form-group">
                                <label for="Coefficient">Coefficient</label>
                                <input type="text" class="form-control" id="Coefficient" name="coefficient">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="desc"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                            <div class="form-group">
                                <label for="filiere">Filière</label>
                                <select name="filiere" class="form-control">
                                    <option value="">Sélectionnez une filière</option>
                                    @foreach($filieres as $filiere)
                                        <option>{{ $filiere }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
