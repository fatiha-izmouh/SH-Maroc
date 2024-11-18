@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Commentaires </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Opinion</th>
                            <th>Rating</th>
                            <th>Statut</th>
                            <th>Détails</th>
                            <th>Accept</th>
                            <th>Refuse</th>
                        </thead>
                        <tbody>
                            @foreach ($commentaires as $commentaire)
                            <tr>
                                <td>{{ $commentaire->nom }}</td>
                                <td>{{ $commentaire->prenom }}</td>
                                <td>{{ $commentaire->email }}</td>
                                <td>{{ $commentaire->opinion }}</td>
                                <td>{{ $commentaire->rating }}</td>
                                <td>{{ $commentaire->statut }}</td>
                                <td>
                                    <!-- Details Button -->
                                    <a href="{{ route('commentaires.show', $commentaire->id) }}" class="btn btn-info btn-sm">Détails</a>
                                </td>
                                <td>
                                    <!-- Accept Button -->
                                    <form action="{{ route('commentaires.updateStatus', ['id' => $commentaire->id, 'status' => 'accepted']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success btn-sm">Accept</button>
                                    </form>
                                </td>
                                <td>
                                    <!-- Refuse Button -->
                                    <form action="{{ route('commentaires.updateStatus', ['id' => $commentaire->id, 'status' => 'refused']) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to refuse this commentaire?');">Refuse</button>
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
    <!-- Optional: Include any additional scripts here -->
@endsection
