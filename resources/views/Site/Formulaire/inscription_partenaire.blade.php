@extends('Site.layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset('site/css/inscription.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

<div class="body mt-5 py-3">

    <div class="container py-5 mt-5">
        <div class="title text-center mb-4">
            استمارة الشراكة
        </div>

    <div class="containeo">
        <p>عند ملء هذه الاستمارة، فإنك تقدم طلبًا لتصبح شريكًا لجمعيتنا SHMaroc. يرجى تقديم معلومات دقيقة وكاملة. سنراجع اقتراحك بعناية وسنتواصل معك في أقرب وقت ممكن.</p>
        <form action="{{ route('partenaires.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group col-xl-12 col-lg-6 col-12 py-2">
                <label for="nom_complet">الاسم الكامل :</label>
                <input type="text" id="nom_complet" name="nom_complet" class="form-control" required>
            </div>

            <div class="form-group col-xl-12 col-lg-6 col-12 py-2">
                <label for="nom_entreprise">اسم الشركة :</label>
                <input type="text" id="nom_entreprise" name="nom_entreprise" class="form-control" required>
            </div>

            <div class="form-group col-xl-12 col-lg-6 col-12 py-2">
                <label for="email">البريد الإلكتروني :</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group col-xl-12 col-lg-6 col-12 py-2">
                <label for="telephone">رقم الهاتف :</label>
                <input type="tel" id="telephone" name="telephone" class="form-control" required>
            </div>

            <div class="form-group col-xl-12 col-lg-6 col-12 py-2">
                <label for="proposition">اقتراح الشراكة :</label>
                <textarea id="proposition" name="proposition" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group col-xl-12 col-lg-6 col-12 py-2">
                <label for="logo">شعار الشركة :</label>
                <input type="file" id="logo" name="logo" class="form-control-file" accept="image/*" required>
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
