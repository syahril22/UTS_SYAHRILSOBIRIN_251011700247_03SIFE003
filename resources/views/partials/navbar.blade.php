
<nav class="navbar navbar-expand-lg navbar-dark site-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2"
           href="{{ route('destinations.index') }}">
            <span class="brand-icon">J</span>
            Jelajah<span class="brand-highlight">Alam</span>
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('destinations.index') && !request()->has('section') ? 'active' : '' }}"
                       href="{{ route('destinations.index') }}">
                        Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('destinations.index') }}#destinasi">
                        Destinasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('destinations.index') }}#tentang-kami">
                        Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-nav ms-lg-2"
                       href="{{ route('destinations.index') }}#destinasi">
                        Jelajahi Sekarang
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
