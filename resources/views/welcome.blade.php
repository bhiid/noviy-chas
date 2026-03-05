<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новий Час — Панель управления</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> 

<body>

<nav class="navbar navbar-expand-lg glass-nav py-3">
    <div class="container">
        <a class="navbar-brand brand-title" href="/">
            Новий Час
        </a>

        <div>
            <a href="{{ route('dashboard') }}" class="btn glass-btn px-4 py-2 fw-semibold">
                Мій кабінет
            </a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="hero d-flex align-items-center justify-content-center text-white">
        </h1>
    </div>
</div>

<div class="container mt-5 mb-5">

    <h2 class="section-title">Розділи сайту</h2>
    <div class="section-line"></div>

    <div class="row g-5">

        <div class="col-md-4">
            <a href="{{ route('services.index') }}" class="text-decoration-none">
                <div class="card glass-card">
                    <img src="/images/services.jpg" class="card-img-top" alt="Услуги">
                    <div class="card-body p-4">
                        <h5 class="card-title">Послуги</h5>
                        <p class="card-text">Управління послугами рекламної компанії.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('portfolio.index') }}" class="text-decoration-none">
                <div class="card glass-card">
                    <img src="/images/portfolio.jpg" class="card-img-top" alt="Портфолио">
                    <div class="card-body p-4">
                        <h5 class="card-title">Портфоліо</h5>
                        <p class="card-text">Наші проєкти, кейси та виконані роботи.</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('posts.index') }}" class="text-decoration-none">
                <div class="card glass-card">
                    <img src="/images/posts.jpg" class="card-img-top" alt="Посты">
                    <div class="card-body p-4">
                        <h5 class="card-title">Пости</h5>
                        <p class="card-text">Новини, статті та публікації компанії.</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

</body>
</html>