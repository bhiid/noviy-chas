<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новий Час</title>

    {{-- Подключение Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Шрифт Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

    {{-- ========================= --}}
    {{--        NAVBAR (GLASS)     --}}
    {{-- ========================= --}}
    <nav class="navbar navbar-expand-lg glass-nav py-3">
        <div class="container">

            <a class="navbar-brand brand-title" href="/">
                Новий Час
            </a>

            <button class="navbar-toggler glass-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="text-white">≡</span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/services">Послуги</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Портфоліо</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/posts">Пости</a>
                    </li>

                    @auth
    <li class="nav-item">
        <a class="nav-link" href="/dashboard">Мій кабінет</a>
    </li>

    @if(auth()->user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/admin">Адмін</a>
        </li>
    @endif

    <li class="nav-item">
        <form action="/logout" method="POST">
            @csrf
            <button class="btn glass-btn ms-3">Вийти</button>
        </form>
    </li>
@else
    <li class="nav-item">
        <a class="btn glass-btn ms-3" href="/login">Увійти</a>
             </li>
            @endauth

                </ul>
            </div>
        </div>
    </nav>

    {{-- ========================= --}}
    {{--        MAIN CONTENT       --}}
    {{-- ========================= --}}
    <main class="container py-5" style="min-height: 80vh;">
        @yield('content')
    </main>

</body>
</html>