@extends('layouts_halaman_depan.v_template')

@section('content')
<!-- Login Form -->

<div class="login-form">
    <div class="login-top">
        <span class="close">&times;</span>
    </div>
    <div class="login">
        <h3 class="text-center">
            Travel Log In
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
        <img src="{{ asset('img/home/header.jpg') }}" alt="Header">
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
        <p><b>Travel</b> merupakan singkatan dari <b>toraja Travel Time</b> merupakan website yang bertujuan mengenalkan
            pesona keindahan toraja mulai dari Wisata dan Budaya . Tidak hanya sarana untuk memperkanalkan, <b>Travel</b>
            juga menyediakan berbagai
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
        <p class="section-subtitle">Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di toraja yang
            dapat anda jelajahi</p>
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
            <a href="{{ URL::to('/kuliner') }}">
                <img src="https://images.pexels.com/photos/2010701/pexels-photo-2010701.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <div class="caption" alt="Culture">
                    <p>KULINER</p>
                    <div class="line"></div>
                    <div class="caption-text">
                        <p>Temukan kuliner yang mnarik dan tak terlupakan</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="{{ URL::to('/berita') }}">
                <img src="https://images.pexels.com/photos/518543/pexels-photo-518543.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <div class="caption" alt="Event">
                    <p>BERITA</p>
                    <div class="line"></div>
                    <div class="caption-text">
                        <p>Ikuti dan ketahui event - event menarik yang berlangsung di toraja</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="{{ URL::to('/penginapan') }}">
                <img src="{{ asset('img/home/stay.jpg') }}">
                <div class="caption" alt="Stay">
                    <p>PENGINAPAN</p>
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
                <img src="https://media.istockphoto.com/photos/traditional-toraja-village-rantepao-tana-toraja-sulawesi-indonesia-picture-id1069936900?k=20&m=1069936900&s=612x612&w=0&h=8TlsbRIZ_Qn5Qs6LHaabebh7VRTtH9lurQYwQF_2my0=">
                {{-- <video controls>
                    <source src="{{ asset('img/home/explore.mp4') }}" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video> --}}
            </div>
            <div class="col-image">
                <div class="row">
                    <div class="col" onclick="window.location.href='gallery.html'">
                        <img src="https://thumbs.dreamstime.com/b/indonesia-sulawesi-tana-toraja-rice-terraces-19683539.jpg">
                        <div class="overlay">
                            <span class="ion-search"></span>
                        </div>
                    </div>
                    <div class="col" onclick="window.location.href='gallery.html'">
                        <img src="https://thumbs.dreamstime.com/b/toraja-22338934.jpg">
                        <div class="overlay">
                            <span class="ion-search"></span>
                        </div>
                    </div>
                    <div class="col" onclick="window.location.href='gallery.html'">
                        <img src="https://thumbs.dreamstime.com/b/traditional-burial-site-tana-toraja-lemo-south-sulawesi-indonesia-famous-coffins-placed-caves-carved-rock-guarded-46729291.jpg">
                        <div class="overlay">
                            <span class="ion-search"></span>
                        </div>
                    </div>
                    <div class="col" onclick="window.location.href='gallery.html'">
                        <img src="https://thumbs.dreamstime.com/b/coffins-16114205.jpg">
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
        <p class="section-subtitle">Wisata terbaik berdasarkan tingkat ketertarikan wisatawan toraja dan kepopuleran
            wisata tersebut</p>
    </div>
    <div class="section-tour-body">
        <div class="row">
            <div class="col-1 slides">
                <img src="{{ asset('data/gambar_destination/'.$rekomendasi1->gambar_destination) }}">
                <div class="overlay">
                    <div class="caption">
                        <div class="caption-text">
                            <p>{{ $rekomendasi1->nama_destination }}</p>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span> <br>
                            <span class="fas fa-rupiah-sign"></span> &nbsp;
                            <b>{{ number_format($rekomendasi1->harga_tiket) }}</b>
                            <a href="single-destination.html" class="btn btn-orange btn-round right">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1 slides">
                <img src="{{ asset('data/gambar_destination/'.$rekomendasi2->gambar_destination) }}">
                <div class="overlay">
                    <div class="caption">
                        <div class="caption-text">
                            <p>{{ $rekomendasi2->nama_destination }}</p>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span> <br>
                            <span class="fas fa-rupiah-sign"></span> &nbsp;
                            <b>{{ number_format($rekomendasi2->harga_tiket) }}</b>
                            <a href="single-destination.html" class="btn btn-orange btn-round right">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2 slides">
                <img src="{{ asset('data/gambar_destination/'.$rekomendasi3->gambar_destination) }}">
                <div class="overlay">
                    <div class="caption">
                        <div class="caption-text">
                            <p>{{ $rekomendasi3->nama_destination }}</p>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span> <br>
                            <span class="fas fa-rupiah-sign"></span> &nbsp;
                            <b>{{ number_format($rekomendasi3->harga_tiket) }}</b>
                            <a href="single-destination.html" class="btn btn-orange btn-round right">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 slides">
                <img src="{{ asset('data/gambar_destination/'.$rekomendasi4->gambar_destination) }}">
                <div class="overlay">
                    <div class="caption">
                        <div class="caption-text">
                            <p>{{ $rekomendasi4->nama_destination }}</p>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span> <br>
                            <span class="fas fa-rupiah-sign"></span> &nbsp;
                            <b>{{ number_format($rekomendasi4->harga_tiket) }}</b>
                            <a href="single-destination.html" class="btn btn-orange btn-round right">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 slides">
                <img src="{{ asset('data/gambar_destination/'.$rekomendasi5->gambar_destination) }}">
                <div class="overlay">
                    <div class="caption">
                        <div class="caption-text">
                            <p>{{ $rekomendasi5->nama_destination }}</p>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star checked"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span> <br>
                            <span class="fas fa-rupiah-sign"></span> &nbsp;
                            <b>{{ number_format($rekomendasi5->harga_tiket) }}</b>
                            <a href="single-destination.html" class="btn btn-orange btn-round right">See Details</a>
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
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="blockquote-user">
                        <div class="blockquote-avatar">
                            <img src="{{ asset('img/home/toraja.jpg') }}" alt="Bae Hyo-Rin">
                        </div>
                        <div class="blockquote-name">John Doe</div>
                    </div>
                </div>
                <div class="blockquote">
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="blockquote-user">
                        <div class="blockquote-avatar">
                            <img src="{{ asset('img/home/toraja.jpg') }}" alt="Bae Hyo-Rin">
                        </div>
                        <div class="blockquote-name">Jane Doe</div>
                    </div>
                </div>
                <div class="blockquote">
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="blockquote-user">
                        <div class="blockquote-avatar">
                            <img src="{{ asset('img/home/toraja.jpg') }}" alt="Bae Hyo-Rin">
                        </div>
                        <div class="blockquote-name">John Roe</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay-btn">
            <button class="btn-orange btn-bullet" onclick='mySwipe.prev()'><span
                    class="fas fa-arrow-left"></span></button> &nbsp;
            <button class="btn-orange btn-bullet" onclick='mySwipe.next()'><span
                    class="fas fa-arrow-right"></span></button>
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
            @foreach ($berita_terbaru as $row)
            <div class="col">
                <img src="{{ asset('data/gambar_berita/'. $row->gambar_berita) }}">
                <div class="overlay">
                    <a href="single-news.html">
                        <p class="text-top"> {{ $row->judul_berita }}</p>
                    </a>
                    <p class="text-bottom">{{ $row->tgl_berita }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@section('script')
<script>
    $('#liDashboard').addClass('active');

</script>
@endsection
