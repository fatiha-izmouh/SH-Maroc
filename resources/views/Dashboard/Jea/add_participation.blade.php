@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Ajouter une Participation</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('participations.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nom_complet">Nom complet</label>
            <input type="text" class="form-control" id="nom_complet" name="nom_complet" required>
          </div>
          <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" required pattern="[0-9]{10}" placeholder="1234567890">
            <small class="form-text text-muted">Veuillez entrer un numéro de téléphone valide à 10 chiffres.</small>
          </div>

          <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" required>
          </div>
          <div class="form-group">
            <label for="specialite">Spécialité</label>
            <input type="text" class="form-control" id="specialite" name="specialite" required>
          </div>
          <div class="form-group">
            <label for="domaine_projet">Domaine du projet</label>
            <input type="text" class="form-control" id="domaine_projet" name="domaine_projet" required>
          </div>
          <div class="form-group">
            <label for="situation_professionnelle">Situation professionnelle</label>
            <input type="text" class="form-control" id="situation_professionnelle" name="situation_professionnelle" required>
          </div>
          <div class="form-group">
            <label for="duree_idee">Durée de l'idée</label>
            <input type="text" class="form-control" id="duree_idee" name="duree_idee" required>
          </div>
          <div class="form-group">
            <label for="objectif">Objectif</label>
            <input type="text" class="form-control" id="objectif" name="objectif" required>
          </div>
          <div class="form-group">
            <label for="attentes">Attentes</label>
            <input type="text" class="form-control" id="attentes" name="attentes" required>
          </div>
          <div class="form-group">
            <label for="formation_description">Description de la formation</label>
            <textarea class="form-control" id="formation_description" name="formation_description" required style="border: 1px solid #ced4da; padding: 10px;"></textarea>
          </div>
          <div class="form-group">
            <label for="confiance_projet">Niveau de confiance dans le projet</label>
            <input type="number" class="form-control" id="confiance_projet" name="confiance_projet" required min="0" max="100" step="1">
          </div>

          <div class="form-group">
            <label for="engagement_programme">Engagement dans le programme</label>
            <input type="text" class="form-control" id="engagement_programme" name="engagement_programme" required>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
