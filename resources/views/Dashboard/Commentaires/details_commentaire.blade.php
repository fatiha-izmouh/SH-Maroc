@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Commentaire Details</h4>
            </div>
            <div class="card-body">
                <p><strong>Nom:</strong> {{ $commentaire->nom }}</p>
                <p><strong>Prénom:</strong> {{ $commentaire->prenom }}</p>
                <p><strong>Email:</strong> {{ $commentaire->email }}</p>
                <p><strong>Opinion:</strong> {{ $commentaire->opinion }}</p>
                <p><strong>Rating:</strong> {{ $commentaire->rating }}</p>
                <p><strong>Statut:</strong> {{ $commentaire->statut }}</p>
                <a href="{{ route('commentaires.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
