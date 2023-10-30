
{{-- <nav class="navbar navbar-expand-lg" style="background-color:#072a4d; color:white">
    <div class="container-fluid">
        <a class="navbar-brand link-light" href="#">DESA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active mx-2 link-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 link-light" href="#">Profil Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 link-light" href="#">Visi Misi</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil Desa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="#">Kelembagaan</a></li>
                        <li><a class="dropdown-item" href="#">Lokasi Desa</a></li>
                        <li><a class="dropdown-item" href="#">Demografi Desa</a></li>
                        <li><a class="dropdown-item" href="#">Keadaan Sosial</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
</nav> --}}

<nav class="navbar navbar-expand-lg bg-faded justify-content-center px-5" style="background-color:#072a4d; color:white">
    {{-- <div class="container "> --}}
        <a href="/" class="navbar-brand d-flex w-50 me-auto link-light">DESA</a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item px-2">
                    <a class="nav-link active link-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link link-light text-nowrap page-scroll" href="/#profil_desa">Profil Desa</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link link-light text-nowrap page-scroll" href="/#visi_misi">Visi Misi</a>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle link-light text-nowrap" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil Desa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item page-scroll" href="/#kelembagaan_desa">Kelembagaan</a></li>
                        <li><a class="dropdown-item page-scroll" href="/#lokasi_desa">Lokasi Desa</a></li>
                        <li><a class="dropdown-item page-scroll" href="/#demografi_desa">Demografi Desa</a></li>
                        <li><a class="dropdown-item page-scroll" href="/#keadaan_sosial_desa">Keadaan Sosial</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle link-light text-nowrap" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan Masarakat
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/user/sku_data') }}">Pembuatan SKU</a></li>
                        <li><a class="dropdown-item" href="{{ url('/user/spktp_data') }}">Pembuatan SPKTP</a></li>
                        <li><a class="dropdown-item" href="{{ url('/user/spkk_data') }}">Pembuatan SPKK</a></li>
                        <li><a class="dropdown-item" href="{{ url('/user/spm_data') }}">Pengaduan Masarakat</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav w-100 justify-content-end">
                @if (Route::has('login'))
                    @auth
                    @if (Auth::check())
                        <div class="btn-group">
                            <a class="nav-link dropdown-toggle link-light text-nowrap" href="#" role="button" data-bs-toggle="dropdown"  data-bs-display="static"  aria-expanded="false">
                                {{Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a class="dropdown-item" href="{{ url('/user/profile/'. Auth::user()->id) }}">Profile</a></li>
                                <li>
                                    <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endif
                @else
                    <div class="text-nowrap">

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-2 link-light text-decoration-none">Sign Up</a>
                    @endif
                    <span> | </span>

                    <a href="{{ route('login') }}" class="px-2 link-light text-decoration-none">Login  </a>
                    @endauth
                </div>
                @endif
            </ul>
        </div>
    {{-- </div> --}}
</nav>



