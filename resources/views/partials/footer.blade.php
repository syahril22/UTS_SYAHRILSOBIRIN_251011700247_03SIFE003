
<footer class="site-footer" id="tentang">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <a class="footer-brand" href="{{ route('destinations.index') }}">
                    Jelajah<span>Alam</span>
                </a>
                <p class="footer-description mt-3 mb-0">
                    Temukan keindahan alam Indonesia, dari pegunungan
                    hingga pantai, dan rencanakan petualanganmu berikutnya.
                </p>
            </div>

            <div class="col-6 col-lg-3">
                <h6 class="footer-heading">Navigasi</h6>
                <a class="footer-link" href="{{ route('destinations.index') }}">Beranda</a>
                <a class="footer-link" href="{{ route('destinations.index') }}#destinasi">Destinasi Wisata</a>
            </div>

            <div class="col-6 col-lg-3">
                <h6 class="footer-heading">Informasi</h6>
                <p class="footer-description mb-2">Proyek UTS Rekayasa Web</p>
                <p class="footer-description mb-0">Universitas Pamulang</p>
            </div>
        </div>

        <hr class="footer-divider my-4">

        <div class="d-flex flex-column flex-md-row justify-content-between gap-2">
            <p class="footer-bottom mb-0">
                &copy; {{ date('Y') }} Jelajah Alam Indonesia.
            </p>
            <p class="footer-bottom mb-0">
                Dibuat untuk pembelajaran pengembangan web.
            </p>
        </div>
    </div>
</footer>
