@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Actualité</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('actualites.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required style="border: 1px solid #ced4da; padding: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required style="border: 1px solid #ced4da; padding: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <!-- File input hidden -->
                        <input type="file" id="image" name="image" class="d-none" required>
                        <!-- Button to trigger file input -->
                        <button type="button" id="uploadButton" class="btn btn-secondary">Choose Image</button>
                        <!-- Filename display -->
                        <span id="imageName" class="ml-2 text-muted"></span>
                        <!-- Image preview -->
                        <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 150px; margin-top: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" required style="border: 1px solid #ced4da; padding: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" required style="border: 1px solid #ced4da; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="objectif">Objectif</label>
                        <textarea class="form-control" id="objectif" name="objectif" required style="border: 1px solid #ced4da; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="categorie">Categorie</label>
                        <select class="form-control" id="categorie" name="categorie" required style="border: 1px solid #ced4da; padding: 10px;">
                            <option value="" disabled selected>Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->type }}">{{ $category->type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Actualité</button>
                    <a href="{{ route('actualites.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const uploadButton = document.querySelector('#uploadButton');
    const fileInput = document.querySelector('#image');
    const imageName = document.querySelector('#imageName');
    const imagePreview = document.querySelector('#imagePreview');

    // Check if elements exist
    if (!uploadButton || !fileInput || !imageName || !imagePreview) {
        console.error("One or more elements are missing in the DOM.");
        return;
    }

    // Trigger file input click when the button is clicked
    uploadButton.addEventListener('click', function () {
        fileInput.click();
    });

    // Handle file input change
    fileInput.addEventListener('change', function () {
        const file = fileInput.files[0]; // Get the selected file

        if (file) {
            // Display the file name
            imageName.textContent = file.name;

            // Display the image preview using FileReader
            const reader = new FileReader();
            reader.onload = function (event) {
                imagePreview.src = event.target.result; // Set preview image
                imagePreview.style.display = 'block'; // Show image
            };
            reader.readAsDataURL(file);
        } else {
            // Reset preview and filename if no file is selected
            imageName.textContent = '';
            imagePreview.style.display = 'none';
        }
    });
});
</script>
@endsection
