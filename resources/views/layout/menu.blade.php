<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{ url('/dashboard') }}">
                    <img class="img-fluid brand-logo" alt="Responsive image"
                        src="{{ asset('app-assets/images/logo/logo.png') }}" width="45px" height="30px">
                    <h2 class="brand-text">Jasa Medika</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            @if (\Auth::user()->role == 1)
                <li class="nav-item {{ $menu == 'home' ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ url('/home') }}"><i data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboard">Home</span></a>
                </li>
                <li class="navigation-header"><span data-i18n="Data Master User">Data Wilayah</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item {{ $menu == 'provinsi' ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ url('/provinsi') }}"><i data-feather='map'></i><span class="menu-title text-truncate"
                            data-i18n="Data Unit">Provinsi</span></a>
                </li>
                <li class="nav-item {{ $menu == 'kabupaten' ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ url('/kabupaten') }}"><i data-feather='map'></i><span class="menu-title text-truncate"
                            data-i18n="Data Unit">Kabupaten/Kota</span></a>
                </li>
                <li class="nav-item {{ $menu == 'kecamatan' ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ url('/kecamatan') }}"><i data-feather='map'></i><span class="menu-title text-truncate"
                            data-i18n="Data Unit">Kecamatan</span></a>
                </li>
                <li class="nav-item {{ $menu == 'desa' ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ url('/desa') }}"><i data-feather='map'></i><span class="menu-title text-truncate"
                            data-i18n="Data Unit">Desa/kelurahan</span></a>
                </li>
            @endif
            <li class="navigation-header"><span data-i18n="Data Master User">Data Pasien</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item {{ $menu == 'pasien' ? 'active' : '' }}"><a class="d-flex align-items-center"
                    href="{{ url('/pasien') }}"><i data-feather='user'></i><span class="menu-title text-truncate"
                        data-i18n="Data Unit">Pasien</span></a>
            </li>

        </ul>
    </div>
</div>
