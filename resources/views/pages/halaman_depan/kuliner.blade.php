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
            <h3>Rumah Makan</h3>
            <span class="fas fa-record-vinyl"></span>&nbsp;
            <span class="fas fa-record-vinyl"></span>&nbsp;
            <span class="fas fa-record-vinyl"></span>
        </div>
</section>
</section>

<ul class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li>Rumah Makan</li>
</ul>

<section class="section section-single">
    <div class="container-fluid">
        <div class="single-head">
            <div class="col">
                <img src="{{ asset('img/home/icon/destination.png') }}">
                <h3>Rumah Makan </h3>
                <p>Jangan khawatir tentang rumah makan, kami menyediakan informasi makanan yang ada di toraja</p>
            </div>
            <div class="col-form">
                <form method="POST">

                </form>
            </div>
        </div>
        <div class="single-body">
            @foreach ($kuliner as $row)
            <div class="col">
                <img src="{{ asset('data/gambar_kuliner/'.$row->gambar_kuliner) }}">
                <div class="overlay">
                    <div class="caption">
                        <div class="caption-text">
                            <p>{{ $row->nama_kuliner }}</p>
                            <a href="{{ URL::to('/single_kuliner/'.$row->id_kuliner) }}"
                                class="btn btn-orange btn-round">Silahkan Berkunjung</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<ul class="pagination">
    <a href="#" class="pagin-arrow arrow-left">
        <span class="fas fa-arrow-left"></span>
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
