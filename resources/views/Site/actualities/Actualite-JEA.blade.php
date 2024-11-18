@extends('Site.layouts.main')

@section('container')

<link href="{{ asset('site/css/Actualities/Actualite.css') }}" rel="stylesheet">

<div class="body">

    <!-- Title -->
    <div class="titre">
        <h1>الأخبار</h1>
    </div>

    <!-- Search Box -->
    <div class="container">
        <div class="search-box">
            <form class="form-inline" method="GET" action="{{ route('actualites.jea') }}">
                <input type="text" name="search" id="search" class="form-control w-100" placeholder="ابحث ..." value="{{ $searchTerm }}">
                <button type="submit" class="btn mt-2">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Cards Container -->
    <div id="cards-container">
        @forelse ($actualitesJEA as $actualite)
            <a href="{{ route('actualite.show', $actualite->id) }}" class="card">
                <img src="{{ asset('storage/'. $actualite->image) }}" alt="{{ $actualite->title }}" class="img-fluid">
                <div class="card-content">
                    <h3 class="title">{{ $actualite->title }}</h3>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($actualite->description, 150, '...') }}</p>
                    <div class="date-lieu">
                        <div class="card-date"><i class="bi bi-calendar3"></i> {{ $actualite->date->translatedFormat('d F Y') }}</div>
                        <div class="card-lieu"><i class="bi bi-geo-alt"></i> {{ $actualite->adresse }}</div>
                    </div>
                </div>
            </a>
        @empty
            <section class="no-actuality-container">
                <p class="no-actuality text-center">لا توجد أخبار متاحة حاليًا.</p>
            </section>
        @endforelse
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@endsection
