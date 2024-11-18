@extends('Site.layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset('site/css/contact/contact.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

<div class="py-5 mt-3">

    <div class="container mt-5">
        <h1 class="general-title">اتصل - <span>بنا</span></h1>
        <p>أخبرنا بأسئلتك أو تعليقاتك</p>

        <div class="contact-section">
            <div class="contact-form">
                <h2>اترك لنا رسالة</h2>
                <form action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nom" placeholder="الاسم">
                        <input type="text" name="prenom" placeholder="اللقب">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="البريد الإلكتروني">
                    </div>
                    <div class="form-group">
                        <input type="text" name="objet" placeholder="الموضوع">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="الرسالة"></textarea>
                    </div>
                    <button type="submit">إرسال</button>
                </form>
            </div>
            <div class="contact-info">
                <img class="contact-icon" src="site/images/Contact/contactez_nous.jpg" alt="اتصل بنا">
                <ul>
                    <li><i class="bi bi-telephone-fill"></i> +212 618151929</li>
                    <li><i class="bi bi-envelope-fill"></i> shmaroc@gmail.com</li>
                    <li><i class="bi bi-geo-alt-fill"></i> شارع مسعود الوفكاوي، الطابق الثالث، السلام، بالقرب من ساحة سيارات الأجرة الصغيرة، أكادير، 80070 حي السلام</li>
                </ul>
            </div>
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
