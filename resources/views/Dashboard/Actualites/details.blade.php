@extends('Dashboard.layouts.admin')

@section('content')
<head>
<!DOCTYPE html>
<html>
<head>
    <title>Actualité Details | SHMAROC</title>
   
</head>
<body>
    @yield('content')
</body>
</html>

</head>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $actualite->title }}</h4>
            </div>
            <div class="card-body">
                <p><strong>Date:</strong> {{ $actualite->date->format('Y-m-d') }}</p>
                <p><strong>Adresse:</strong> {{ $actualite->adresse }}</p>
                <p><strong>Description:</strong> {{ $actualite->description }}</p>
                <p><strong>Objectif:</strong> {{ $actualite->objectif }}</p>
                <p><strong>Catégorie:</strong> {{ $actualite->categorie }}</p>
                <p><strong>Image : </strong></p>
                 @if ($actualite->image )
                 <div style="text-align: left; margin-top: 10px; margin-bottom: 15px; ">
                    <img src="{{ asset('storage/' . $actualite->image) }}" alt="image" style="width: 150px; height: auto;">
                </div>
                @else
                <p>No image</p>
                @endif
            </div>
        </div>
        <a href="{{ route('actualites.index') }}" class="btn btn-primary mt-3">Back to List</a>
    </div>
</div>
</div>
</div>
@endsection


