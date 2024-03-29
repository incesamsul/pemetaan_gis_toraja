<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Pemetaan gis</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            {{-- MENU PENGGUNA --}}
            {{-- SEMUA PENGGUNA / USER MEMPUNYAI MENU INI --}}
            <li class="menu-header">Pengguna</li>
            <li class="" id="liDashboard"><a class="nav-link" href="{{ URL::to('/dashboard') }}"><i
                        class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li class="" id="liProfile"><a class="nav-link" href="{{ URL::to('/profile') }}"><i class="fas fa-user"></i>
                    <span>Profile</span></a></li>
            <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/bantuan') }}"><i
                        class="fas fa-question-circle"></i> <span>Bantuan</span></a></li>



            @if (auth()->user()->role == 'Administrator')
            {{-- MENU ADMIN --}}
            <li class="menu-header">Admin</li>
            <li class="nav-item dropdown " id="liPengguna">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                    <span>Pengguna</span></a>
                <ul class="dropdown-menu">
                    <li id="liManajemenPengguna"><a class="nav-link" href="/admin/pengguna">Manajemen Pengguna</a></li>
                </ul>
            </li>
            <li class="" id="liMaps"><a target="_blank" class="nav-link" href="https://www.arcgis.com/home/webmap/viewer.html?useExisting=1"><i
                class="fas fa-map"></i> <span>Arcgis Map</span></a></li>
            <li class="" id="liDestination"><a class="nav-link" href="{{ URL::to('/admin/destination') }}"><i
                        class="fas fa-mountain"></i> <span>Destination</span></a></li>
            <li class="" id="liBerita"><a class="nav-link" href="{{ URL::to('/admin/berita') }}"><i
                        class="fas fa-newspaper"></i> <span>Berita</span></a></li>
            <li class="" id="liPenginapan"><a class="nav-link" href="{{ URL::to('/admin/penginapan') }}"><i
                        class="fas fa-hotel"></i> <span>Penginapan</span></a></li>
            <li class="" id="liKuliner"><a class="nav-link" href="{{ URL::to('/admin/kuliner') }}"><i
                        class="fas fa-hamburger"></i> <span>Kuliner</span></a></li>

            {{-- END OF MENU ADMIN --}}
            @endif







        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ URL::to('/logout') }}" class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>
