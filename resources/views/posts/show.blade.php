@extends('layouts.app')

@section('content')

<div class="glass-card p-4">

    <h1 class="hero-title mb-4">{{ $post->title }}</h1>

    @if($post->image)
        <img src="{{ $post->image }}" class="w-100 mb-4 rounded" style="max-height: 420px; object-fit: cover;">
    @endif

    <p class="mb-4" style="opacity: 0.9;">
        {{ $post->content }}
    </p>

    <a href="{{ route('posts.index') }}" class="btn-view">
        ← Назад до постів
    </a>

</div>

@endsection