

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Ali Vahap AYDIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a  style="font-size: 1.2em" class="nav-link" href="{{ route('welcome') }}">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 1.2em" class="nav-link" href="{{ route('aboutme') }}">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 1.2em" class="nav-link" href="{{ route('services') }}">Hizmetlerim</a>
                    </li>
                    <li class="nav-item">
                    <a style="font-size: 1.2em" class="nav-link {{ Request::is('portfolyo') ? 'active' : '' }}" href="{{ route('portfolyo') }} ">Portfolyo</a>
                    </li>
                    <!-- Diğer sayfaların bağlantıları -->
                </ul>
            </div>
        </div>
    </nav>
</header>
