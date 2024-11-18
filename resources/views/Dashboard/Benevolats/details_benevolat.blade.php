@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Bénévolat Details</h4>
      <p class="category">Details for {{ $benevolat->nom_complet }}</p>
    </div>
    <div class="card-body">
      <p><strong>Nom :</strong> {{ $benevolat->nom_complet }}</p>
      <p><strong>Email :</strong> {{ $benevolat->email }}</p>
      <p><strong>Téléphone :</strong> {{ $benevolat->telephone }}</p>
      <p><strong>Adresse :</strong> {{ $benevolat->adresse }}</p>
      <p><strong>Disponibilités :</strong> {{ $benevolat->disponibilites }}</p>
      <p><strong>Compétences et Intérêts :</strong> {{ $benevolat->competences }}</p>
      <p><strong>Statut :</strong> {{ $benevolat->statut }}</p>
      <a href="{{ route('benevolats.index') }}" class="btn btn-primary">Back to List</a>
    </div>
  </div>
</div>
</div>
@endsection
@section('scripts')

@endsection
