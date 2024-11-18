@extends('Site.layouts.main')

@section('container')

<!-- CSS Files  -->
<link rel="stylesheet" href="{{ asset('site/css/inscription.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">


<div class="body mt-5 py-3">

    <div class="container py-5 mt-5">
        <div class="title text-center mb-4">
            استمارة طلب التطوع
        </div>

    <div class="containeo">
        <p>شكراً على اهتمامكم بالانضمام كمتطوع في جمعيتنا SHMaroc. يرجى ملء النموذج أدناه لمساعدتنا في فهم مهاراتكم وتوافراتكم بشكل أفضل. سنتواصل معكم قريبًا لمناقشة فرص التطوع.</p>
        <form action="{{ route('benevolats.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group col-xl-12 col-lg-12 col-12 py-2">
                <label for="nom">الاسم الكامل :</label>
                <input type="text" id="nom_complet" name="nom_complet" class="form-control" required>
            </div>

            <div class="form-group col-xl-12 col-lg-12 col-12 py-2">
                <label for="email">البريد الإلكتروني :</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group col-xl-12 col-lg-12 col-12 py-2">
                <label for="telephone">رقم الهاتف :</label>
                <input type="tel" id="telephone" name="telephone" class="form-control" required>
            </div>

            <div class="form-group col-xl-12 col-lg-12 col-12 py-2">
                <label for="adresse">العنوان :</label>
                <input type="text" id="adresse" name="adresse" class="form-control">
            </div>

            <div class="form-group col-xl-12 col-lg-12 col-12 py-2">
                <label for="disponibilites">التوافر :</label>
                <textarea id="disponibilites" name="disponibilites" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group col-xl-12 col-lg-12 col-12 py-2">
                    <label for="competences">المهارات والاهتمامات :</label>
                    <textarea id="competences" name="competences" class="form-control" rows="5"></textarea>
            </div>

            <div class="button-group">
                <button type="submit">إرسال</button>
            </div>
        </form>
    </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    });
</script>

@endsection
