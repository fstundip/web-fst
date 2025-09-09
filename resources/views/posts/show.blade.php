@extends('layouts.main')

@section('container')
<div style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <style>
        /* Efek grayscale untuk gambar */
        .grayscale {
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }
    </style>
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $post->category->name }}</h2>
    <div class="container mt-3 text-dark">
        <h6 class="card-title mb-3 fw-semibold text-center">{{$post->title}}</h6>
        @php
            $isClosed = str_contains(strtolower($post->body), 'sudah ditutup') || str_contains(strtolower($post->title), 'sudah ditutup');
        @endphp
        <div id="img-news" style="display: block;">
            <img src="{{ asset('storage/' . $post->image)}}" alt="" class="img-fluid rounded-5 mb-1 mx-auto d-block {{ $isClosed ? 'grayscale' : '' }}"
            style="width: 720px;">
        </div>
        <p class="card-text text-center"><small class="text-muted">{{$post->created_at->format('l, j F Y')}}</small></p>
        <div>
            {!! $post->body !!}
        </div>
    </div>
</div>
@endsection