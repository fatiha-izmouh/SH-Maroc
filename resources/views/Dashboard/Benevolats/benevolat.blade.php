@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Bénévolats Table</h4>
      <a href="{{ route('benevolats.create') }}" class="btn btn-primary mb-3">Ajouter un benevolat</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <th>Nom complet</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Adresse</th>
            <th>Disponibilités</th>
            <th>Compétences et Intérêts</th>
            <th>Statut</th>
            <th>Details</th>
            <th>Accept</th>
            <th>Refuse</th>
          </thead>
          <tbody>
            @foreach ($benevolats as $benevolat)
            <tr>
              <td>{{ $benevolat->nom_complet }}</td>
              <td>{{ $benevolat->email }}</td>
              <td>{{ $benevolat->telephone }}</td>
              <td>{{ $benevolat->adresse }}</td>
              <td>{{ $benevolat->disponibilites }}</td>
              <td>{{ $benevolat->competences }}</td>
              <td>{{ $benevolat->statut }}</td>
              <td>
                <!-- Show Details Button -->
                <a href="{{ route('benevolats.show', $benevolat->id) }}" class="btn btn-info btn-sm">Show Details</a>
              </td>
              <td>
                <!-- Accept Button -->
                <form action="{{ route('benevolats.updateStatus', ['id' => $benevolat->id, 'status' => 'accepted']) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="btn btn-success btn-sm">Accept</button>
                </form>
              </td>
              <td>
                <!-- Refuse Button -->
                <form action="{{ route('benevolats.updateStatus', ['id' => $benevolat->id, 'status' => 'refused']) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="btn btn-danger btn-sm">Refuse</button>
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
