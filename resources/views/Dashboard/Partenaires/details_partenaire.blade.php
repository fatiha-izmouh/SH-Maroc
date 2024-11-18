@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Partenaire Details</h4>
      <p class="category">Details for {{ $partenaire->nom_complet }}</p>
    </div>
    <div class="card-body">
      <p><strong>Nom complet :</strong> {{ $partenaire->nom_complet }}</p>
      <p><strong>Nom de l'entreprise :</strong> {{ $partenaire->nom_entreprise }}</p>
      <p><strong>Logo de l'entreprise : </strong></p>
      @if ($partenaire->logo)
      <div style="text-align: left; margin-top: 10px; margin-bottom: 15px; ">
        <img src="{{ asset('storage/' . $partenaire->logo) }}" alt="Logo de l'entreprise" style="width: 150px; height: auto;">
      </div>
      @else
      <p>No image</p>
      @endif
      <p><strong>Email :</strong> {{ $partenaire->email }}</p>
      <p><strong>Téléphone :</strong> {{ $partenaire->telephone }}</p>
      <p><strong>Proposition de partenariat :</strong> {{ $partenaire->proposition }}</p>
      <p><strong>Statut :</strong> {{ $partenaire->statut }}</p>
      <a href="{{ route('partenaires.index') }}" class="btn btn-primary">Back to List</a>
    </div>
  </div>
</div>
</div>
@endsection
@section('scripts')

@endsection
