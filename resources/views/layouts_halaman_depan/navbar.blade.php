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
                <li><a href="gallery.html">Gallery</a></li>
                <li><a data-slide="slides" data-slide-target="#discover">Discover</a></li>
                <li><a href="news.html"> News</a></li>
                {{-- <li><button class="btn-login" id="openLogin">LOGIN</button></li> --}}
                <li><button data-path="{{ URL::to('/login') }}" class="btn-login">LOGIN</button></li>
            </ul>
        </div>
    </div>
</nav>