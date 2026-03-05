@extends('layouts.app')

@section('content')

<h1 class="section-title">Користувачі</h1>
<div class="section-line"></div>

<div class="glass-card p-4">

    <table class="table text-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Імʼя</th>
                <th>Email</th>
                <th>Роль</th>
                <th>Дії</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <span style="color: {{ $user->role === 'admin' ? '#FFD700' : '#fff' }};">
                            {{ $user->role }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn-view">Редагувати</a>

                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn-view" style="background: rgba(255,0,0,0.25);">
                                Видалити
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection