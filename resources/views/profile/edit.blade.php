@extends('layouts.app')

@section('content')

<h1 class="section-title">Редагування профілю</h1>
<div class="section-line"></div>

<div class="glass-card p-4">

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <label class="login-label">Імʼя</label>
        <input type="text" name="name" class="login-input mb-3" value="{{ auth()->user()->name }}">

        <label class="login-label">Email</label>
        <input type="email" name="email" class="login-input mb-3" value="{{ auth()->user()->email }}">

        <button class="login-button w-100 mt-3">Оновити</button>
    </form>

</div>

@endsection