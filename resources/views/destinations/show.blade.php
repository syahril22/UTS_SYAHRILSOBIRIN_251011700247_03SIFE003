
@extends('layouts.app')

@section('title', $destination->name . ' | Jelajah Alam Indonesia')

@section('content')
<section class="detail-section">
    <div class="container">
        <nav aria-label="breadcrumb" class="detail-breadcrumb">
            <a href="{{ route('destinations.index') }}">Beranda</a>
            <span>/</span>
            <span>{{ $destination->name }}</span>
        </nav>

        <div class="detail-card mt-4">
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="detail-image-wrapper">
                        <img
                            src="{{ asset('assets/images/' . $destination->image) }}"
                            alt="{{ $destination->name }}"
                            class="detail-image"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >
                        <div class="detail-image-fallback">
                            <span>✳</span>
                            <p>Foto {{ $destination->name }}</p>
                            <small>Tambahkan gambar ke folder assets/images</small>
                        </div>
                        <span class="detail-image-badge">Destinasi Wisata Alam</span>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="detail-content">
                        <span class="section-eyebrow">JELAJAHI NUSANTARA</span>

                        <h1 class="detail-title mt-3">
                            {{ $destination->name }}
                        </h1>

                        <p class="detail-region">
                            <span aria-hidden="true">⌖</span>
                            {{ $destination->region }}
                        </p>

                        <div class="detail-divider"></div>

                        <h2 class="detail-subtitle">Tentang destinasi</h2>

                        <p class="detail-description">
                            {{ $destination->description }}
                        </p>

                        <div class="ticket-panel mt-4">
                            <span class="price-caption">Harga tiket (data katalog)</span>
                            <strong class="detail-price">
                                Rp{{ number_format($destination->ticket_price, 0, ',', '.') }}
                            </strong>
                            <small>Harga pada website merupakan data contoh untuk tugas UTS.</small>
                        </div>

                        <a href="{{ route('destinations.index') }}"
                           class="btn btn-explore w-100 mt-4">
                            <span aria-hidden="true">&larr;</span>
                            Kembali ke semua destinasi
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="detail-note mt-4">
            <strong>Tips perjalanan</strong>
            <p class="mb-0">
                Sebelum berkunjung, periksa informasi akses, cuaca, jam kunjungan,
                dan ketentuan resmi dari pengelola destinasi.
            </p>
        </div>
    </div>
</section>
@endsection
