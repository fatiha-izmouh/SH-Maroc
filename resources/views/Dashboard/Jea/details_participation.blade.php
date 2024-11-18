@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Participation Details</h4>
    </div>
    <div class="card-body">
        <p><strong>Nom complet :</strong> {{ $participation->nom_complet }}</p>
        <p><strong>Date de Naissance :</strong> {{ $participation->date_naissance }}</p>
        <p><strong>Email :</strong> {{ $participation->email }}</p>
        <p><strong>Téléphone :</strong> {{ $participation->telephone }}</p>
        <p><strong>Ville :</strong> {{ $participation->ville }}</p>
        <p><strong>Spécialité :</strong> {{ $participation->specialite }}</p>
        <p><strong>Domaine du projet :</strong> {{ $participation->domaine_projet }}</p>
        <p><strong>Situation professionnelle :</strong> {{ $participation->situation_professionnelle }}</p>
        <p><strong>Durée de l'idée :</strong> {{ $participation->duree_idee }}</p>
        <p><strong>Objectif :</strong> {{ $participation->objectif }}</p>
        <p><strong>Attentes :</strong> {{ $participation->attentes }}</p>
        <p><strong>Description de la formation :</strong> {{ $participation->formation_description }}</p>
        <p><strong>Niveau de confiance dans le projet :</strong> {{ $participation->confiance_projet }}</p>
        <p><strong>Engagement dans le programme :</strong> {{ $participation->engagement_programme }}</p>
        <p><strong>Statut :</strong> {{ $participation->statut }}</p>
        <a href="{{ route('participations.index') }}" class="btn btn-primary">Back to List</a>
    </div>
  </div>
</div>
</div>
@endsection
@section('scripts')

@endsection
