@extends('layouts.app')

@section('content')

<div class="glass-card p-4">

    <h1 class="hero-title mb-4">{{ $item->title }}</h1>

    @if($item->image)
        <img src="{{ $item->image }}" class="w-100 mb-4 rounded" style="max-height: 420px; object-fit: cover;">
    @endif

    <p class="mb-4" style="opacity: 0.9;">
        {{ $item->description }}
    </p>

    <a href="{{ route('portfolio.index') }}" class="btn-view">
        ← Назад до портфоліо
    </a>

</div>

@endsection