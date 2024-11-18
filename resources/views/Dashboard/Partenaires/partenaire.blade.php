@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Partenaires Table</h4>
      <a href="{{ route('partenaires.create') }}" class="btn btn-primary mb-3">Add Partenaire</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <th>Nom complet</th>
            <th>Nom de l'entreprise </th>
            <th>Logo de l'entreprise </th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Proposition de partenariat</th>
            <th>Statut</th>
            <th>Details</th>
            <th>Accept</th>
            <th>Refuse</th>
          </thead>
          <tbody>
            @foreach ($partenaires as $partenaire)
            <tr>
              <td>{{ $partenaire->nom_complet}}</td>
              <td>{{ $partenaire->nom_entreprise }}</td>
              <td>
                @if ($partenaire->logo)
                  <img src="{{ asset('storage/' . $partenaire->logo) }}" alt="Logo de l'entreprise" style="width: 100px; height: auto;">
                @else
                  No image
                @endif
              </td>
              <td>{{ $partenaire->email }}</td>
              <td>{{ $partenaire->telephone }}</td>
              <td>{{ $partenaire->proposition }}</td>
              <td>{{ $partenaire->statut }}</td>
              <td>
                <!-- Show Details Button -->
                <a href="{{ route('partenaires.show', $partenaire->id) }}" class="btn btn-info btn-sm">Show Details</a>
              </td>
              <td>
                <!-- Accept Button -->
                <form action="{{ route('partenaires.updateStatus', ['id' => $partenaire->id, 'status' => 'accepted']) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="btn btn-success btn-sm">Accept</button>
                </form>
              </td>
              <td>
                <!-- Refuse Button -->
                <form action="{{ route('partenaires.updateStatus', ['id' => $partenaire->id, 'status' => 'refused']) }}" method="POST" style="display:inline;">
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
