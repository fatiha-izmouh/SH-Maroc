@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Actualités Table</h4>
    </div>
    <div class="card-body">
      <a href="{{ route('actualites.create') }}" class="btn btn-primary mb-3">Add Actualité</a>
      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <th>Title</th>
            <th>Image</th>
            <th>Date</th>
            <th>Adresse</th>
            <th>Description</th>
            <th>Objectif</th>
            <th>Categorie</th>
            <th>Details</th>
            <th>Modify</th>
            <th>Delete</th>
          </thead>
          <tbody>
            @foreach ($actualites as $actualite)
            <tr>
              <td>{{ $actualite->title }}</td>
              <td>
                @if ($actualite->image)
                  <img src="{{ asset('storage/' . $actualite->image) }}" alt="image" style="width: 100px; height: auto;">
                @else 
                  No image
                @endif
              </td>
              <td>{{ $actualite->date->format('Y-m-d') }}</td>
              <td>{{ $actualite->adresse }}</td>
              <td>{{ $actualite->description }}</td>
              <td>{{ $actualite->objectif }}</td>
              <td>{{ $actualite->categorie }}</td>
              <td>
            <a href="{{ route('actualites.details', $actualite->id) }}" class="btn btn-info btn-sm">Details</a>
        </td>
              <td>
                <!-- Modify Button -->
                <a href="{{ route('actualites.edit', $actualite->id) }}" class="btn btn-warning btn-sm">Modify</a>
              </td>
              <td>
                <!-- Delete Button -->
                <form action="{{ route('actualites.destroy', $actualite->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
@endsection
@section('scripts')

@endsection
