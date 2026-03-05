@extends('layouts.app')

@section('content')

<div class="glass-card p-4">

    <h1 class="hero-title mb-4">{{ $service->title }}</h1>

    @if($service->image)
        <img src="{{ $service->image }}" class="w-100 mb-4 rounded" style="max-height: 420px; object-fit: cover;">
    @endif

    <p class="mb-4" style="opacity: 0.9;">
        {{ $service->description }}
    </p>

    <h3 class="service-price mb-4">
        {{ $service->price }} грн
    </h3>

    <a href="{{ route('admin.services.index') }}" class="btn-view">
        ← Назад
    </a>

</div>

@endsection
