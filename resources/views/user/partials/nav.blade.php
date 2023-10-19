{{-- <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
<div class="container">
    <a href="/index.php" class="logo"><img src="assets/logo2.svg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
                <a class="nav-link mx-1" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-1" href="#visi_misi">Visi dan Misi</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#profil_desa" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Profil Desa
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#kelembagaan">Kelembagaan</a></li>
                    <li><a class="dropdown-item" href="#lokasi_desa">Lokasi Desa</a></li>
                    <li><a class="dropdown-item" href="#demografi_desa">Demografi Desa</a></li>
                    <li><a class="dropdown-item" href="#keadaan_sosial">Keadaan Sosial</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#layanan_masyarakat" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Layanan Masyarakat
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="../SIDEWA-WEB/page/pembuatan-sku.php">Pembuatan SKU</a></li>
                    <li><a class="dropdown-item" href="#">Pembuatan KTP</a></li>
                    <li><a class="dropdown-item" href="#">Pembuatan KK</a></li>
                    <li><a class="dropdown-item" href="#">Pengaduan Masyarakat</a></li>
                </ul>
            </li>
        </ul>


    </div>
</nav> --}}
<!-- Navbar -->



{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">




<div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Visi Misi</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil Desa
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kelembagaan</a></li>
            <li><a class="dropdown-item" href="#">Lokasi Desa</a></li>
            <li><a class="dropdown-item" href="#">Demografi Desa</a></li>
            <li><a class="dropdown-item" href="#">Keadaan Sosial</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Layanan Masarakat
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item"  href="{{ url('/user/sku_data') }}" >Pembuatan SKU</a></li>
            <li><a class="dropdown-item" href="#">Pembuatan SPKTP</a></li>
            <li><a class="dropdown-item" href="#">Pembuatan SPKK</a></li>
            <li><a class="dropdown-item" href="#">Pengaduan Masarakat</a></li>
        </ul>
        </li>

    </ul>



        @if (Route::has('login'))
            @auth

            @if (Auth::check())
                <a href="{{ url('/user/dashboard') }}" class="btn btn-outline-success mx-2"></a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" style="margin-right: 20px">
                    Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            @endif

                @else
                <a href="{{ route('login') }}" class="btn btn-outline-success mx-2">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
                @endif

            @endauth
        @endif

    </div>
</div>
</nav> --}}


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DESA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active mx-2" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">Profil Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">Visi Misi</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil Desa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Kelembagaan</a></li>
                        <li><a class="dropdown-item" href="#">Lokasi Desa</a></li>
                        <li><a class="dropdown-item" href="#">Demografi Desa</a></li>
                        <li><a class="dropdown-item" href="#">Keadaan Sosial</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Masarakat
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/user/sku_data') }}">Pembuatan SKU</a></li>
                        <li><a class="dropdown-item" href="{{ url('/user/spktp_data') }}">Pembuatan SPKTP</a></li>
                        <li><a class="dropdown-item" href="{{ url('/user/spkk_data') }}">Pembuatan SPKK</a></li>
                        <li><a class="dropdown-item" href="#">Pengaduan Masarakat</a></li>
                    </ul>
                </li>
            </ul>
            @if (Route::has('login'))
                @auth
                @if (Auth::check())
                    <a href="{{ url('/user/dashboard') }}" class="btn btn-outline-success mx-2">User</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-success mx-2" style="margin-right: 20px">
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                @endif
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-success mx-2">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
                @endif
                @endauth
            @endif
        </div>
    </div>
</nav>




