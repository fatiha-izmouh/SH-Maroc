@extends('Dashboard.layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Ajouter Partenaire</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('partenaires.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nom_complet">Nom complet</label>
                        <input type="text" name="nom_complet" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nom_entreprise">Nom de l'entreprise</label>
                        <input type="text" name="nom_entreprise" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Logo de l'entreprise</label>
                        <!-- File input hidden -->
                        <input type="file" id="image" name="logo" class="d-none" required>
                        <!-- Button to trigger file input -->
                        <button type="button" id="uploadButton" class="btn btn-secondary">Choose Logo</button>
                        <!-- Filename display -->
                        <span id="imageName" class="ml-2 text-muted"></span>
                        <!-- Image preview -->
                        <img id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 150px; margin-top: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group"><label for="telephone">Téléphone</label>
                    <input type="tel" class="form-control" id="telephone" name="telephone" required pattern="[0-9]{10}" placeholder="1234567890">
                    <small class="form-text text-muted">Veuillez entrer un numéro de téléphone valide à 10 chiffres.</small>
                </div>
                    <div class="form-group">
                        <label for="proposition">Proposition de partenariat</label>
                        <textarea name="proposition" class="form-control" rows="3" required style="border: 1px solid #ced4da; padding: 10px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a href="{{ route('partenaires.index') }}" class="btn btn-secondary">Cancel</a>
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
