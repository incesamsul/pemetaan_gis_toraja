@extends('layouts_halaman_depan.v_template')

@section('content')
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

<section class="section-header-single">
    <img src="{{ asset('img/home/toraja.jpg') }}">
    <div class="overlay">
        <div class="header-title">
            <h3>Tourism Destinations</h3>
            <span class="fas fa-record-vinyl"></span>&nbsp;
            <span class="fas fa-record-vinyl"></span>&nbsp;
            <span class="fas fa-record-vinyl"></span>
        </div>
</section>
</section>

<ul class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li>Destination</li>
</ul>

<section class="section section-single">
    <div class="container-fluid">
        <div class="single-head">
            <div class="col">
                <img src="{{ asset('img/home/icon/destination.png') }}">
                <h3>find your destination right now !</h3>
                <p>Berikut adalah daftar destinasi yang tersedia dengan harga yang bersahabat, silahkan pilih sesuai
                    keinginan</p>
            </div>
            <div class="col-form">
                <form method="POST">

                </form>
            </div>
        </div>
        <div class="single-body">
            @foreach ($destination as $row)
            <div class="col">
                <img src="{{ asset('data/gambar_destination/'.$row->gambar_destination) }}">
                <div class="overlay">
                    <div class="caption">
                        <div class="caption-text">
                            <p>{{ $row->nama_destination }}</p>
                            <span class="fas fa-shopping-bag"></span> &nbsp;
                            <b>Rp. {{ number_format($row->harga_tiket) }}</b> <br>
                            <a href="{{ URL::to('/single_destination/'.$row->id_destination) }}"
                                class="btn btn-orange btn-round">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<ul class="pagination">
    <a href="#" class="fas fa-arrow-left">
        <span class="ion-ios-arrow-back"></span>
    </a>
    <a class="pagin-number active">1</a>
    <a href="#" class="pagin-number">2</a>
    <a href="#" class="pagin-number">3</li>
        <a href="#" class="pagin-number">4</a>
        <a href="#" class="pagin-number">5</a>
        <a href="#" class="pagin-arrow arrow-right">
            <span class="fas fa-arrow-right"></span>
        </a>
</ul>


@endsection

@section('script')
<script>
    $('#liDashboard').addClass('active');

</script>
@endsection
