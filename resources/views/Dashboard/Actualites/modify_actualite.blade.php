@extends('Dashboard.layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Actualité</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('actualites.update', $actualite->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $actualite->title) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control" onchange="previewImage(event)">
                        
                        <!-- Show the old image if available -->
                        @if ($actualite->image)
                            <div id="old-image-container">
                                <img src="{{ asset('storage/' . $actualite->image) }}" alt="Old Image" id="old-image" style="width: 100px; height: auto; margin-top: 10px;">
                            </div>
                        @endif
                        
                        <!-- This will show the preview of the new image -->
                        <div id="image-preview-container" style="display: none; margin-top: 10px;">
                            <img id="image-preview" src="#" alt="New Image" style="width: 100px; height: auto;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $actualite->date->format('Y-m-d')) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse', $actualite->adresse) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description', $actualite->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="objectif">Objectif</label>
                        <input type="text" name="objectif" id="objectif" class="form-control" value="{{ old('objectif', $actualite->objectif) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="categorie">Categorie</label>
                        <input type="text" name="categorie" id="categorie" class="form-control" value="{{ old('categorie', $actualite->categorie) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('actualites.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Function to preview the selected image
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('image-preview');
            output.src = reader.result;
            document.getElementById('image-preview-container').style.display = 'block'; // Show the new image preview
            document.getElementById('old-image-container').style.display = 'none'; // Hide the old image preview
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
