@extends('layouts.app')

@section('content')

<h1 class="section-title">Управління Портфоліо</h1>
<div class="section-line"></div>

<div class="mb-4">
    <a href="{{ route('admin.portfolio.create') }}" class="btn-view">
        + Додати роботу
    </a>
</div>

<div class="glass-card p-4">

    <table class="table text-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Назва</th>
                <th>Зображення</th>
                <th>Дії</th>
            </tr>
        </thead>

        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ $item->image }}" style="height: 50px; border-radius: 6px;">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.portfolio.show', $item->id) }}" class="btn-view">Переглянути</a>
                        <a href="{{ route('admin.portfolio.edit', $item->id) }}" class="btn-view">Редагувати</a>

                        <form action="{{ route('admin.portfolio.destroy', $item->id) }}" method="POST" style="display:inline;">
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