@extends('layout.be.template')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ol>
    <div class="card mb-4">
    <img src="{{ asset('images/gambar1 basket.jpg') }}" class="card-img-top" alt="Dragon Court Image" style="width: 300px;">
    <div class="card-body">
        <h5 class="card-title">Dragon Basketball Court</h5>
        <p class="card-text">
            Dragon Basketball Court
            Mataram
            Rp150.000 (1 hours)
        </p>
        <!-- Konten atau teks tambahan jika diperlukan -->
    </div>
    <div class="card mb-4">
    <img src="{{ asset('images/gambar2 basket.jpg') }}" class="card-img-top" alt="Warriors Court Image" style="width: 300px;">
    <div class="card-body">
        <h5 class="card-title">Warriors Basketball Court</h5>
        <p class="card-text">
            Warriors Basketball Court
            Mataram
            Rp200.000 (1 hours)
        </p>
        <!-- Konten atau teks tambahan jika diperlukan -->
    </div>
    <div class="card mb-4">
    <img src="{{ asset('images/gambar3 basket.jpg') }}" class="card-img-top" alt="Miami Court Image" style="width: 300px;">
    <div class="card-body">
        <h5 class="card-title">Miami Basketball Court</h5>
        <p class="card-text">
            Miami Basketball Court
            Mataram
            Rp180.000 (1 hours)
        </p>
        <!-- Konten atau teks tambahan jika diperlukan -->
    </div>
</div>

</div>
@endsection
