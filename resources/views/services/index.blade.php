@extends('layouts.app')

@section('content')

<h1 class="section-title">Наші Послуги</h1>
<div class="section-line"></div>

<div class="services-grid">
    @foreach($services as $service)
        <div class="service-card">

            <div class="service-image">
                <img src="{{ $service->image }}" alt="{{ $service->title }}">
            </div>

            <div class="service-content">
                <h3 class="service-title">{{ $service->title }}</h3>

                <p class="service-description">
                    {{ Str::limit($service->description, 120) }}
                </p>

                <p class="service-price">
                    {{ $service->price }} грн
                </p>

                <a href="{{ route('services.show', $service->id) }}" class="btn-view">
                    Переглянути
                </a>
            </div>

        </div>
    @endforeach
</div>

@endsection