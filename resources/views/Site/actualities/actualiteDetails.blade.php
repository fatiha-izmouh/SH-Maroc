@extends('Site.layouts.main')

@section('container')


<link href="{{ asset('site/css/Actualities/ActualiteDetails.css') }}" rel="stylesheet">


<div class="container my-5 pt-5">

    <div class="text-center">
        <!-- عنوان الحدث -->
        <h1 class="title">{{ $actualite->title }}</h1>
        <!-- التاريخ والعنوان -->
        <p class="date">{{ $actualite->date->translatedFormat('d F Y') }} | {{ $actualite->adresse }}</p>
    </div>

    <!-- الصورة الرئيسية -->
    <div class="main-image text-center mb-4">
        <img src="{{ asset('storage/'. $actualite->image) }}" class="img-fluid" alt="الصورة الرئيسية للحدث">
    </div>

    <!-- الهدف -->
    <div class="objectif">
        <h5>الهدف :</h5>
        <p>{!! $actualite->objectif !!}</p>
    </div>

    <!-- الوصف -->
    <div class="description">
        <h5>الوصف :</h5>
        <p>{!! $actualite->description !!}</p>
    </div>



    <!-- صور إضافية (إذا كانت متاحة) -->
    {{-- <div class="images">
        <div class="image">
            <img src="{{asset('site/images/Slides/s1.png')}}"class="img-fluid" alt="صورة 1">
        </div>
        <div class="image">
            <img src="{{asset('site/images/Slides/s2.png')}}" class="img-fluid" alt="صورة 2">
        </div>
        <div class="image">
            <img src="{{asset('site/images/Slides/s4.jpg')}}" class="img-fluid" alt="صورة 3">
        </div>
    </div> --}}
</div>

@endsection
