@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Ajouter Bénévole</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('benevolats.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nom_complet">Nom complet</label>
                        <input type="text" name="nom_complet" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required pattern="[0-9]{10}" placeholder="1234567890">
                        <small class="form-text text-muted">Veuillez entrer un numéro de téléphone valide à 10 chiffres.</small>
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="disponibilites">Disponibilités</label>
                        <input type="text" name="disponibilites" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="competences">Compétences et Intérêts</label>
                        <input type="text" name="competences" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a href="{{ route('benevolats.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
