
@extends('layouts.app')

@section('title', 'Daftar Startup | Direktori Startup Lokal')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="mb-5">
            <span class="badge bg-success mb-2">DIREKTORI</span>
            <h1 class="section-title">Daftar Startup Lokal</h1>
            <p class="text-secondary">
                Kenali startup Indonesia dari berbagai bidang industri.
            </p>
            <div class="text-secondary">
                Total startup terdaftar:
                <strong>{{ $startups->count() }} startup</strong>
            </div>
        </div>

        <div class="row g-4">
            @forelse ($startups as $startup)
                <div class="col-sm-6 col-lg-4">
                    <div class="card startup-card shadow-sm h-100">

                        <img
                            src="{{ asset('assets/images/' . $startup->logo) }}"
                            class="startup-logo"
                            alt="Logo {{ $startup->name }}"
                            loading="lazy"
                        >

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-success align-self-start mb-2">
                                {{ $startup->industry }}
                            </span>

                            <h5 class="card-title fw-bold">
                                {{ $startup->name }}
                            </h5>

                            <p class="text-secondary small mb-2">
                                Pendiri: {{ $startup->founder }}
                            </p>

                            <p class="card-text text-secondary">
                                {{ \Illuminate\Support\Str::limit($startup->description, 110) }}
                            </p>

                            <div class="mt-auto pt-2">
                                <a
                                    href="{{ route('startups.show', $startup->id) }}"
                                    class="btn btn-green w-100"
                                >
                                    Lihat Detail
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">
                        Belum ada data startup yang tersedia.
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</section>

@endsection