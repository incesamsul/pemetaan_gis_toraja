<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toraja - Toraja Travel Time</title>
    <!-- Import Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/ionicons.min.css') }}">

    <!-- Import Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home/main.css') }}">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-bars">
                <a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i class="ion-navicon-round"></i></a>
                <a href="index.html" class="navbar-title">toraja Travel Time</a>
            </div>
            <div class="navbar-item">
                <a href="index.html" class="navbar-title">toraja Travel Time</a>
                <ul>
                    <li><a href="destination.html">Destination</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a data-slide="slides" data-slide-target="#discover">Discover</a></li>
                    <li><a href="news.html"> News</a></li>
                    <li><button class="btn-login" id="openLogin">LOGIN</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="sidebar-list">
            <li><a href="" class="close"><span class="ion-android-close"></span></a></li>
            <li class="sidebar-list-hover"><a href="index.html">Home</a></li>
            <li class="sidebar-list-hover"><a href="destination.html">Destination</a></li>
            <li class="sidebar-list-hover"><a href="gallery.html">Gallery</a></li>
            <li class="sidebar-list-hover"><a href="index.html#discover">Discover</a></li>
            <li class="sidebar-list-hover"><a href="news.html"> News</a></li>
            <li><a class="btn btn-orange btn-round" href="login.html"> Login</a></li>
        </ul>
    </div>

    <!-- Sidebar Overlay -->
    <section class="sidebar-overlay"></section>

    <!-- Login Form -->

    <div class="login-form">
        <div class="login-top">
            <span class="close">&times;</span>
        </div>
        <div class="login">
            <h3 class="text-center">
                Bavel Log In
            </h3>
            <div class="form-input">
                <label>Email</label> <br>
                <input type="email" name="" class="form-control">
            </div>
            <div class="form-input">
                <label>Password</label> <br>
                <input type="password" name="" class="form-control">
            </div>
            <div class="form-input">
                <button type="submit" class="btn btn-login">Log In</button>
            </div>
            <a href="" class="text-center">Don't have account ? Register now</a>
        </div>
    </div>

    <div class="login-overlay"></div>

    <!-- Section Header -->

    <section class="section-header">
        <div class="section-header-image">
            <img src="{{ asset("img/home/header.jpg") }}" alt="Header">
        </div>
        <div class="container">
            <div class="section-header-inner">
                <div class="section-header-title">
                    <h3 class="title">GREAT <br> ART <br>OF <br>toraja</h3>
                    <p>Telusuri Keindahan toraja Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="" class="btn btn-round btn-orange">See Our Vacation</a>
                </div>
                <div class="section-header-title-xs">
                    <h3 class="title">GREAT ART OF toraja</h3>
                    <p>Telusuri Keindahan toraja Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="" class="btn btn-round btn-orange">See Our Vacation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->

    <section class="section section-about">
        <div class="about-head slides">
            <h3>toraja Travel Time</h3>
            <p><b>Bavel</b> merupakan singkatan dari <b>toraja Travel Time</b> merupakan website yang bertujuan mengenalkan pesona keindahan toraja mulai dari Wisata dan Budaya . Tidak hanya sarana untuk memperkanalkan, <b>Bavel</b> juga menyediakan berbagai
                layanan pemesanan tiket mulai tiket Tour dan tempat penginapan di sekitar toraja </p>
        </div>
        <div class="about-body">
            <div class="row slides">
                <div class="col">
                    <img src="{{ asset('img/home/About/035-trekking.png') }}">
                    <h2>ADVENTURE</h2>
                    <p>Dapatkan pengalaman berpetualang yang belum pernah anda rasakan sebelumnya hanya di toraja</p>
                </div>
                <div class="col">
                    <img src="{{ asset('img/home/About/028-book.png') }}">
                    <h2>GUIDE</h2>
                    <p>Kami memberikan info - info seputar toraja mulai dari event dan destinasi terbaik</p>
                </div>
                <div class="col">
                    <img src="{{ asset('img/home/About/024-tent.png') }}">
                    <h2>STAY</h2>
                    <p>Anda tidak perlu kawatir akan menetap dimana karna kami menyediakan tiket Hotel terbaik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Explore -->

    <section class="section-explore">
        <div class="texture-handler-top"></div>
        <div class="overlay">
            <div class="caption">
                <h2>ENJOY BEUTY & friendliness OF</h2> <br>
                <h1>TANA TORAJA</h1>
            </div>
        </div>
        <div class="texture-handler-bottom"></div>
    </section>

    <!-- Section Discover -->

    <section class="section section-discover" id="discover">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">DISCOVERY toraja</h3>
            <p class="section-subtitle">Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di toraja yang dapat anda jelajahi</p>
        </div>
        <div class="section-discover-body slides">
            <div class="col">
                <a href="destination.html">
                    <img src="{{ asset('img/home/toraja.jpg') }}" alt="Destination">
                    <div class="caption">
                        <p>DESTINATION</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Kunjungi destinasi wisata yang belum pernah anda temui sebelumnya</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="culture.html">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="caption" alt="Culture">
                        <p>CULTURE</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Selain pemandangan yang indah toraja juga memiliki budaya yang mengesankan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="event.html">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="caption" alt="Event">
                        <p>EVENT</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Ikuti dan ketahui event - event menarik yang berlangsung di toraja</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="stay.html">
                    <img src="{{ asset('img/home/stay.jpg') }}">
                    <div class="caption" alt="Stay">
                        <p>WHERE TO STAY</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Temukan tempat penginapan terbaik dengan harga yang relatif murah</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery toraja -->

    <section class="section section-gallery">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">OUR GALLERY</h3>
            <p class="section-subtitle">Potret indahnya kenampakan toraja yang tidak boleh anda lewatkan</p>
        </div>
        <div class="section-gallery-body">
            <div class="row">
                <div class="col-video">
                    <video controls>
				  <source src="{{ asset('img/home/explore.mp4') }}" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>
                </div>
                <div class="col-image">
                    <div class="row">
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="{{ asset('img/home/toraja.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="{{ asset('img/home/toraja.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="{{ asset('img/home/toraja.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="{{ asset('img/home/toraja.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tours -->

    <section class="section section-tour">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">5 RECOMENDED TOURS</h3>
            <p class="section-subtitle">Wisata terbaik berdasarkan tingkat ketertarikan wisatawan toraja dan kepopuleran wisata tersebut</p>
        </div>
        <div class="section-tour-body">
            <div class="row">
                <div class="col-1 slides">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata 1</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000</b>
                                <a href="single-destination.html" class="btn btn-orange btn-round right">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 slides">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata 2</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000</b>
                                <a href="single-destination.html" class="btn btn-orange btn-round right">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2 slides">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata 3</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000 - Rp. 60.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 slides">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata 4</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 75.000 - Rp. 150.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 slides">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata 5</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 10.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Newsletter -->

    <section class="section-testi">
        <div class="overlay">
            <div class="head">
                <h3>Tourist Says</h3>
            </div>
            <div id='mySwipe' class='swipe'>
                <div class="swipe-wrap">
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="{{ asset('img/home/toraja.jpg') }}" alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">John Doe</div>
                        </div>
                    </div>
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="img/faces/joe-gardner-2.jpg" alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">Jane Doe</div>
                        </div>
                    </div>
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="img/faces/clem-onojeghuo-3.jpg" alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">John Roe</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-btn">
                <button class="btn-orange btn-bullet" onclick='mySwipe.prev()'><span class="ion-arrow-left-c"></span></button> &nbsp;
                <button class="btn-orange btn-bullet" onclick='mySwipe.next()'><span class="ion-arrow-right-c"></span></button>
            </div>
        </div>
    </section>

    <!-- Section News -->

    <section class="section section-news">
        <div class="section-news-head">
            <h3 class="section-title">WHAT'S HAPPENING</h3>
            <p class="section-subtitle">Apa saja yang terjadi seputar Pariwisata, Kebudayaan dan Event di toraja</p>
        </div>
        <div class="section-news-body">
            <div class="row slides">
                <div class="col">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top"> 10 Ribu Sepeda Tua dari 30 Negara Kumpul di toraja</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top">Keistimewaan toraja di Mata Dubes Mesir</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('img/home/toraja.jpg') }}">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top">Aksi Polres Badung Tangkal Hoaks</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Footer -->

    <section class="section-footer">
        <div class="texture-handler-top"></div>
        <div class="row">
            <div class="col-left">
                <p>Copyright &copy; 2017</p>
                <p>Jl. Panglima Sudirman, Caruban Madiun <br> Phone : +62 851 2343 9090 <br> Email : contact@bavel.com </p>
                <a href="https://www.facebook.com/besttoraja/" target="_blank"><span class="ion-social-facebook icon-social"></span></a>
                <a href="https://www.instagram.com/exploretoraja/" target="_blank"><span class="ion-social-instagram icon-social"></span></a>
                <a href="https://twitter.com/hashtag/exploretoraja?lang=en" target="_blank"><span class="ion-social-twitter icon-social"></span></a>
            </div>
            <div class="col-right">
                <b>EXPERIENCE</b>
                <ul>
                    <li><a href="#">Natural</a></li>
                    <li><a href="#">Culture</a></li>
                    <li><a href="#">Religi</a></li>
                    <li><a href="#">Culnary</a></li>
                    <li><a href="#">Adventure</a></li>
                </ul>
            </div>
            <div class="col-right">
                <b>TRAVEL GUIDE</b>
                <ul>
                    <li><a href="#">Tourism Guide</a></li>
                    <li><a href="#">Travel Agent</a></li>
                    <li><a href="#">Accomodations</a></li>
                    <li><a href="#">On Budget</a></li>
                </ul>
            </div>
            <div class="col-right">
                <b>WHAT'S HAPPEN</b>
                <ul>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Event</a></li>
                    <li><a href="#">Tips & Info</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Created With <span class="ion-heart red"></span> to create a Lovable Website</p>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/home/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/home/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/home/swipe.js') }}"></script>
</body>

</html>
