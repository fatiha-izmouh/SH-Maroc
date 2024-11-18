@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Participations Table</h4>
        <a href="{{ route('participations.create') }}" class="btn btn-primary mb-3">Add Participation</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="text-primary">
              <th>Nom complet</th>
              <th>Date de Naissance</th>
              <th>Email</th>
              <th>Téléphone</th>
              <th>Ville</th>
              <th>Spécialité</th>
              <th>Domaine du projet</th>
              <th>Situation professionnelle</th>
              <th>Durée de l'idée</th>
              <th>Objectif</th>
              <th>Attentes</th>
              <th>Description de la formation</th>
              <th>Niveau de confiance dans le projet</th>
              <th>Engagement dans le programme</th>
              <th>Statut</th>
              <th>Details</th>
              <th>Accept</th>
              <th>Refuse</th>
            </thead>
            <tbody>
              @foreach ($participations as $participation)
              <tr>
                <td> {{ $participation->nom_complet }}</td>
                <td> {{ $participation->date_naissance }}</td>
                <td> {{ $participation->email }}</td>
                <td> {{ $participation->telephone }}</td>
                <td> {{ $participation->ville }}</td>
                <td> {{ $participation->specialite }}</td>
                <td> {{ $participation->domaine_projet }}</td>
                <td> {{ $participation->situation_professionnelle }}</td>
                <td> {{ $participation->duree_idee }}</td>
                <td> {{ $participation->objectif }}</td>
                <td> {{ $participation->attentes }}</td>
                <td> {{ $participation->formation_description }}</td>
                <td> {{ $participation->confiance_projet }}</td>
                <td> {{ $participation->engagement_programme }}</td>
                <td> {{ $participation->statut }}</td>
                <td>
                  <a href="{{ route('participations.show', $participation->id) }}" class="btn btn-info btn-sm">Show Details</a>
                </td>
                <td>
                  <form action="{{ route('participations.updateStatus', ['id' => $participation->id, 'status' => 'accepted']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success btn-sm">Accept</button>
                  </form>
                </td>
                <td>
                  <form action="{{ route('participations.updateStatus', ['id' => $participation->id, 'status' => 'refused']) }}" method="POST" style="display:inline;">
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
