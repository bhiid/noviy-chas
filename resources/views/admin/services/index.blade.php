@extends('layouts.app')

@section('content')

<h1 class="section-title">Управління Послугами</h1>
<div class="section-line"></div>

<div class="mb-4">
    <a href="{{ route('admin.services.create') }}" class="btn-view">
        + Додати послугу
    </a>
</div>

<div class="glass-card p-4">

    <table class="table text-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Назва</th>
                <th>Ціна</th>
                <th>Зображення</th>
                <th>Дії</th>
            </tr>
        </thead>

        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->price }} грн</td>
                    <td>
                        @if($service->image)
                            <img src="{{ $service->image }}" style="height: 50px; border-radius: 6px;">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.services.show', $service->id) }}" class="btn-view">Переглянути</a>
                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn-view">Редагувати</a>

                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn-view" style="background: rgba(255,0,0,0.25);">Видалити</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection
