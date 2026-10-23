
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Startup Lokal Indonesia')</title>

    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <style>
        body {
            background-color: #f5f7f6;
            color: #24332d;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #153d2b;
        }

        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }

        .navbar .nav-link {
            color: #ffffff;
            margin-left: 12px;
        }

        .navbar .nav-link:hover {
            color: #b8e6c8;
        }

        .hero {
            background: linear-gradient(135deg, #153d2b, #28734d);
            color: white;
            padding: 70px 0;
        }

        .section-title {
            font-weight: bold;
            color: #153d2b;
        }

        .startup-card {
            border: none;
            border-radius: 14px;
            overflow: hidden;
            transition: transform 0.2s ease;
        }

        .startup-card:hover {
            transform: translateY(-5px);
        }

        .startup-logo {
            height: 180px;
            width: 100%;
            object-fit: contain;
            padding: 20px;
            background: white;
        }

        .btn-green {
            background-color: #1d6240;
            color: white;
            border: none;
        }

        .btn-green:hover {
            background-color: #12452b;
            color: white;
        }

        footer {
            background-color: #153d2b;
            color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                STARTUP LOKAL
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('startups.index') }}">Daftar Startup</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('startups.index') }}">Direktori</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}#tentang">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-4 mt-5">
        <div class="container text-center">
            <p class="mb-1 fw-bold">Direktori Startup Lokal</p>
            <small>tujuannya adalah untuk mempromosikan dan memudahkan pencarian startup dan perusahaan teknologi Indonesia.</small>
            <p class="mb-0 mt-2">
                &copy; {{ date('Y') }} Rio Oktaviaaberd
            </p>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
