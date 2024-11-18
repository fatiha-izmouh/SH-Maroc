@extends('Dashboard.layouts.admin')


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Messages </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>Nom Complet</th>
                            <th>Email</th>
                            <th>Objet</th>
                            <th>Message</th>
                            <th>Détails</th>
                            <th>Supprimer</th>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->nom_complet }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->objet }}</td>
                                <td>{{ $message->message }}</td>

                                <td>
                                    <a href="{{ route('messages.show', $message->id) }}" class="btn btn-info btn-sm">Détails</a>
                                </td>
                                <td>
                                    <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this message?');">Supprimer</button>
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
