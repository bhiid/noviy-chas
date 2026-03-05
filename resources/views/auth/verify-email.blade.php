@extends('layouts.app')

@section('content')

<div class="glass-card p-4">

    <h1 class="hero-title mb-3">Підтвердження Email</h1>

    <p style="opacity: 0.85;">
        Ми надіслали вам листа з посиланням для підтвердження.
    </p>

    <form method="POST" action="{{ route('verification.send') }}" class="mt-4">
        @csrf
        <button class="login-button">Надіслати ще раз</button>
    </form>

</div>

@endsection