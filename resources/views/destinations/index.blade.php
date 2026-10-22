
@extends('layouts.app')

@section('title', 'Jelajah Alam Indonesia | Temukan Petualanganmu')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="hero-eyebrow">
                    <span class="eyebrow-dot"></span>
                    PESONA ALAM NUSANTARA
                </span>

                <h1 class="hero-title mt-4">
                    Temukan alam,<br>
                    <span>temukan ceritamu.</span>
                </h1>

                <p class="hero-description mt-4">
                    Dari pegunungan yang megah hingga laut yang memukau,
                    Indonesia menyimpan petualangan yang menunggu untuk dijelajahi.
                </p>

                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="#destinasi" class="btn btn-explore">
                        Jelajahi Destinasi <span aria-hidden="true">&rarr;</span>
                    </a>
                    <a href="#tentang-kami" class="btn btn-outline-nature">
                        Tentang Kami
                    </a>
                </div>

                <div class="hero-stats mt-5">
                    <div>
                        <strong>{{ $destinations->total() }}+</strong>
                        <span>Destinasi Pilihan</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div>
                        <strong>Indonesia</strong>
                        <span>Negeri Penuh Pesona</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="hero-visual">
                    <img
                        src="{{ asset('assets/images/raja-ampat.jpg') }}"
                        alt="Pemandangan alam Raja Ampat"
                        class="hero-image"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >
                    <div class="hero-image-fallback">
                        <span class="fallback-icon">✳</span>
                        <span>Keindahan Alam Indonesia</span>
                        <small>Tempat gambar akan ditampilkan</small>
                    </div>

                    <div class="hero-image-label">
                        <span class="label-dot"></span>
                        <div>
                            <strong>Keajaiban Nusantara</strong>
                            <small>Selalu ada yang dijelajahi</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="destinations-section" id="destinasi">
    <div class="container">
        <div class="section-heading d-flex flex-column flex-md-row
                    justify-content-between align-items-md-end gap-3">
            <div>
                <span class="section-eyebrow">PILIH PETUALANGANMU</span>
                <h2 class="section-title mt-2">Destinasi pilihan</h2>
                <p class="section-description mb-0">
                    Jelajahi tempat-tempat menakjubkan dari berbagai penjuru Indonesia.
                </p>
            </div>

            <span class="destination-count">
                {{ $destinations->total() }} destinasi tersedia
            </span>
        </div>

        <div class="row g-4 mt-3">
            <div class="container mb-4">
                <form action="{{ route('destinations.index') }}" method="GET">
                    <div class="row g-2 justify-content-center">
                        <div class="col-md-6">
                            <input
                                type="search"
                                name="search"
                                class="form-control"
                                placeholder="Cari nama atau wilayah destinasi..."
                                value="{{ $search ?? '' }}"
                                aria-label="Cari destinasi"
                            >
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-dark">
                                <i class="bi bi-search"></i> Cari
                            </button>
                        </div>

                        @if (!empty($search))
                            <div class="col-auto">
                                <a
                                    href="{{ route('destinations.index') }}"
                                    class="btn btn-outline-secondary"
                                >
                                    Reset
                                </a>
                            </div>
                        @endif
                    </div>
                </form>
            </div>

            @forelse ($destinations as $destination)
                <div class="col-sm-6 col-lg-4">
                    <article class="destination-card h-100">
                        <a
                            href="{{ route('destinations.show', $destination) }}"
                            class="destination-image-link"
                            aria-label="Lihat detail {{ $destination->name }}"
                        >
                            <img
                                src="{{ asset('assets/images/' . $destination->image) }}"
                                alt="{{ $destination->name }}"
                                class="destination-image"
                                loading="lazy"
                                onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                            >
                            <div class="image-fallback">
                                <span>✳</span>
                                <small>Foto destinasi</small>
                            </div>
                            <span class="image-badge">Wisata Alam</span>
                        </a>

                        <div class="destination-body">
                            <div class="destination-region">
                                <span aria-hidden="true">⌖</span>
                                {{ $destination->region }}
                            </div>

                            <h3 class="destination-title">
                                <a href="{{ route('destinations.show', $destination) }}">
                                    {{ $destination->name }}
                                </a>
                            </h3>

                            <p class="destination-description">
                                {{ \Illuminate\Support\Str::limit($destination->description, 105) }}
                            </p>

                            <div class="destination-card-footer">
                                <div>
                                    <span class="price-caption">Harga tiket</span>
                                    <strong class="destination-price">
                                        Rp{{ number_format($destination->ticket_price, 0, ',', '.') }}
                                    </strong>
                                </div>

                                <a
                                    href="{{ route('destinations.show', $destination) }}"
                                    class="btn btn-card-detail"
                                    aria-label="Lihat detail {{ $destination->name }}"
                                >
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-state text-center py-5">
                        <h3>
                            {{ !empty($search) ? 'Destinasi tidak ditemukan' : 'Destinasi belum tersedia' }}
                        </h3>
                        <p>
                            {{ !empty($search)
                                ? 'Coba gunakan nama atau wilayah destinasi yang berbeda.'
                                : 'Silakan tambahkan data wisata melalui seeder.' }}
                        </p>

                        @if (!empty($search))
                            <a
                                href="{{ route('destinations.index') }}"
                                class="btn btn-dark mt-2"
                            >
                                Tampilkan Semua Destinasi
                            </a>
                        @endif
                    </div>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if ($destinations->hasPages())
            <div class="destination-pagination mt-5">
                <p class="pagination-info text-center mb-3">
                    Menampilkan
                    <strong>{{ $destinations->firstItem() }}–{{ $destinations->lastItem() }}</strong>
                    dari <strong>{{ $destinations->total() }}</strong> destinasi
                </p>

                <div class="d-flex justify-content-center">
                    {{ $destinations->withQueryString()->links('pagination::bootstrap-5') }}
                </div>
            </div>
        @endif
    </div>
</section>

<section class="about-section" id="tentang-kami">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="about-visual">
                    <img
                        src="{{ asset('assets/images/raja-ampat.jpg') }}"
                        alt="Keindahan alam Indonesia sebagai inspirasi Jelajah Alam"
                        class="about-image"
                        loading="lazy"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >

                    <div class="about-image-fallback">
                        <span>✳</span>
                        <p>Alam Indonesia, sejuta cerita</p>
                        <small>Foto akan tampil setelah gambar tersedia</small>
                    </div>

                    <div class="about-image-label">
                        <strong>Jelajah Alam Indonesia</strong>
                        <small>Mengenal keindahan Nusantara</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <span class="section-eyebrow">TENTANG KAMI</span>

                <h2 class="about-title mt-3">
                    Lebih dekat dengan<br>
                    <span>keindahan Indonesia.</span>
                </h2>

                <p class="about-description mt-4">
                    Jelajah Alam Indonesia adalah katalog wisata yang dibuat
                    untuk membantu pengunjung mengenal beragam destinasi alam
                    Nusantara melalui informasi yang ringkas dan mudah dipahami.
                </p>

                <p class="about-description">
                    Kami menghadirkan informasi nama destinasi, wilayah,
                    deskripsi, dan harga tiket contoh dalam satu tampilan.
                    Dengan begitu, pengunjung dapat menjelajahi pilihan wisata
                    dan melihat detail setiap destinasi dengan mudah.
                </p>

                <div class="about-features">
                    <div class="about-feature">
                        <span class="about-feature-icon" aria-hidden="true">⌖</span>
                        <div>
                            <strong>Kenali Destinasi</strong>
                            <p>Temukan pilihan wisata alam dari berbagai wilayah Indonesia.</p>
                        </div>
                    </div>

                    <div class="about-feature">
                        <span class="about-feature-icon" aria-hidden="true">▤</span>
                        <div>
                            <strong>Informasi Praktis</strong>
                            <p>Lihat ringkasan dan detail destinasi dalam satu tempat.</p>
                        </div>
                    </div>

                    <div class="about-feature">
                        <span class="about-feature-icon" aria-hidden="true">✳</span>
                        <div>
                            <strong>Pesona Nusantara</strong>
                            <p>Mengenal keragaman alam Indonesia melalui katalog wisata.</p>
                        </div>
                    </div>

                    <div class="about-feature">
                        <span class="about-feature-icon" aria-hidden="true">↗</span>
                        <div>
                            <strong>Mudah Dijelajahi</strong>
                            <p>Navigasi sederhana dengan tampilan responsif.</p>
                        </div>
                    </div>
                </div>

                <a href="#destinasi" class="btn btn-explore about-cta">
                    Temukan Destinasi <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .destination-pagination .pagination {
        flex-wrap: wrap;
        gap: 6px;
        margin-bottom: 0;
    }

    .destination-pagination .page-link {
        min-width: 40px;
        min-height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #dce3dc;
        border-radius: 8px;
        color: #26352c;
        background-color: #fff;
        font-size: 14px;
        font-weight: 500;
        box-shadow: none;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .destination-pagination .page-link:hover {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40;
    }

    .destination-pagination .page-item.active .page-link {
        color: #fff;
        background-color: #212529;
        border-color: #212529;
    }

    .destination-pagination .page-item.disabled .page-link {
        color: #adb5bd;
        background-color: #f8f9fa;
        border-color: #e9ecef;
    }

    .destination-pagination .pagination-info {
        color: #6c757d;
        font-size: 14px;
    }

    .destination-pagination .pagination-info strong {
        color: #26352c;
    }

    @media (max-width: 576px) {
        .destination-pagination .page-link {
            min-width: 36px;
            min-height: 36px;
            padding: 6px 10px;
            font-size: 13px;
        }
    }
</style>
@endsection
