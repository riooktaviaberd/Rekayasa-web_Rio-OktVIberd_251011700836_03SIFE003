
@extends('layouts.app')

@section('title', $startup->name . ' | Direktori Startup Lokal')

@section('content')

<section class="py-5">
    <div class="container">

        <a href="{{ route('startups.index') }}"
           class="btn btn-outline-success mb-4">
            &larr; Kembali ke Daftar Startup
        </a>

        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="row g-0">

                <div class="col-lg-5 d-flex align-items-center justify-content-center p-4"
                     style="background-color: #ffffff; min-height: 300px;">

                    <img
                        src="{{ asset('assets/images/' . $startup->logo) }}"
                        alt="Logo {{ $startup->name }}"
                        class="img-fluid"
                        style="max-height: 260px; max-width: 100%; object-fit: contain;"
                    >

                </div>

                <div class="col-lg-7">
                    <div class="card-body p-4 p-lg-5">

                        <span class="badge bg-success mb-3">
                            {{ $startup->industry }}
                        </span>

                        <h1 class="section-title mb-3">
                            {{ $startup->name }}
                        </h1>

                        <p class="text-secondary mb-4">
                            {{ $startup->description }}
                        </p>

                        <hr>

                        <h5 class="fw-bold mt-4">Informasi Startup</h5>

                        <div class="mb-3">
                            <span class="text-secondary">Nama Startup</span>
                            <p class="fw-semibold mb-0">
                                {{ $startup->name }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <span class="text-secondary">Bidang Industri</span>
                            <p class="fw-semibold mb-0">
                                {{ $startup->industry }}
                            </p>
                        </div>

                        <div class="mb-3">
                            <span class="text-secondary">Pendiri</span>
                            <p class="fw-semibold mb-0">
                                {{ $startup->founder }}
                            </p>
                        </div>

                        <a
                            href="{{ $startup->website }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="btn btn-green mt-3"
                        >
                            Kunjungi Website Resmi
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection