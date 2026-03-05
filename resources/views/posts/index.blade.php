@extends('layouts.app')

@section('content')

<h1 class="section-title">Наші Пости</h1>
<div class="section-line"></div>

<div class="services-grid">
    @foreach($posts as $post)
        <div class="service-card">

            <div class="service-image">
                <img src="{{ $post->image }}" alt="{{ $post->title }}">
            </div>

            <div class="service-content">
                <h3 class="service-title">{{ $post->title }}</h3>

                <p class="service-description">
                    {{ Str::limit($post->content, 120) }}
                </p>

                <a href="{{ route('posts.show', $post->id) }}" class="btn-view">
                    Читати
                </a>
            </div>

        </div>
    @endforeach
</div>

@endsection