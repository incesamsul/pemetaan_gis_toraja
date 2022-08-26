@extends('layouts_halaman_depan.v_template')

@section('content')


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

<!-- Section -->

<section class="section-ticket">
    <div class="header">
        <img src="{{ asset('data/gambar_kuliner/'.$kuliner->gambar_kuliner) }}">
        <div class="overlay">
            <div class="desc">
                <h3>{{ $kuliner->nama_kuliner }}</h3>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star checked"></span>
                <span class="fas fa-star"></span>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="panel">
            <div class="panel-header">
                <span class="fas fa-bookmark"></span>&nbsp; Description
            </div>
            <div class="panel-body">
                <p>{{ $kuliner->deskripsi_kuliner }}</p>
                <p> klik <a href="https://www.google.co.id/maps/place/{{ $kuliner->nama_kuliner }}">disini</a> untuk melihat rute</p>
            </div>
        </div>

    </div>
</section>


@endsection

@section('script')
<script>
    $('#liDashboard').addClass('active');
    $('body').css('background-color','#e6eaed');
</script>
@endsection
