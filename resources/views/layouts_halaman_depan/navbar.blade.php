<!-- Navbar -->
<nav class="navbar">
    <div class="container">
        <div class="navbar-bars">
            <a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i class="ion-navicon-round"></i></a>
            <a href="index.html" class="navbar-title">toraja Travel Time</a>
        </div>
        <div class="navbar-item">
            <a href="{{ URL::to('/') }}" class="navbar-title">toraja Travel Time</a>
            <ul>
                <li><a href="{{ URL::to('/destination') }}">Destination</a></li>
                <li><a href="/berita">Berita</a></li>
                {{-- <li><a data-slide="slides" data-slide-target="{{ URL::to('/kuliner') }}">Rumah makan</a></li> --}}
                <li><a href="{{ URL::to('/kuliner') }}">Rumah makan</a></li>
                <li><a href="{{ URL::to('/penginapan') }}">Penginapan</a></li>
                <li><a href="/full_map"> Full map</a></li>
                {{-- <li><button class="btn-login" id="openLogin">LOGIN</button></li> --}}
                <li><button data-path="{{ URL::to('/login') }}" class="btn-login">LOGIN</button></li>
            </ul>
        </div>
    </div>
</nav>
