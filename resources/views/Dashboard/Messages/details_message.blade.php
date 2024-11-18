@extends('Dashboard.layouts.admin')


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Message Details</h4>
            </div>
            <div class="card-body">
                <p><strong>Nom Complet:</strong> {{ $message->nom_complet }}</p>
                <p><strong>Email:</strong> {{ $message->email }}</p>
                <p><strong>Objet:</strong> {{ $message->objet }}</p>
                <p><strong>Message:</strong> {{ $message->message }}</p>
                <a href="{{ route('messages.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
