
@extends('layouts.app')

@section('title', 'Beranda | Direktori Startup Lokal')

@section('content')

<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-light text-success mb-3">
                    DIREKTORI STARTUP INDONESIA
                </span>

                <h1 class="display-4 fw-bold mb-3">
                    Mengenal Startup Lokal,
                    <br>Menemukan Inovasi Baru.
                </h1>

                <p class="lead mb-4">
                    Jelajahi berbagai perusahaan rintisan Indonesia
                    yang menghadirkan solusi inovatif di bidang teknologi,
                    pendidikan, keuangan, dan berbagai industri lainnya.
                </p>

                <a href="{{ route('startups.index') }}"
                   class="btn btn-light btn-lg fw-bold">
                    Jelajahi Startup
                </a>
            </div>

            <div class="col-lg-4 text-center mt-4 mt-lg-0">
                <div class="p-4 rounded-4"
                     style="background: rgba(255,255,255,0.12);">
                    <div style="font-size: 90px;">🚀</div>
                    <h3 class="fw-bold">Inovasi Indonesia</h3>
                    <p class="mb-0">
                        Ide lokal untuk masa depan digital.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" id="tentang">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Tentang Direktori</h2>
            <p class="text-secondary">
                Mengenal perusahaan rintisan yang berkembang di Indonesia.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="fs-1 mb-3">💡</div>
                    <h5 class="fw-bold">Informasi Startup</h5>
                    <p class="text-secondary mb-0">
                        Temukan informasi nama, industri, pendiri,
                        dan deskripsi berbagai startup.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="fs-1 mb-3">🌐</div>
                    <h5 class="fw-bold">Beragam Industri</h5>
                    <p class="text-secondary mb-0">
                        Jelajahi startup di bidang perdagangan digital,
                        pendidikan, transportasi, dan keuangan.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <div class="fs-1 mb-3">📈</div>
                    <h5 class="fw-bold">Wawasan Digital</h5>
                    <p class="text-secondary mb-0">
                        Kenali peran perusahaan rintisan dalam
                        perkembangan ekonomi digital Indonesia.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('startups.index') }}"
               class="btn btn-green btn-lg px-4">
                Lihat Daftar Startup
            </a>
        </div>
    </div>
</section>

@endsection