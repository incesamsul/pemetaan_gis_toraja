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
        <img src="{{ asset('data/gambar_destination/'.$destination->gambar_destination) }}">
        <div class="overlay">
            <div class="desc">
                <h3>{{ $destination->nama_destination }}</h3>
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
                <span class="ion-ios-bookmarks"></span>&nbsp; Description
            </div>
            <div class="panel-body">
                <p>{{ $destination->deskripsi_destination }}</p>
            </div>
        </div>

        <div class="panel">
            <div class="panel-header">
                <span class="ion-map"></span>&nbsp; Peta
            </div>
            <div class="panel-body">
                <div class="col-1">

                    <iframe width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        title="toraja1" src="{{ $destination->link_pemetaan }}"></iframe>
                </div>
                <div class="col-2">
                    <h3>Detail & peta Info</h3>
                    <p>Loram1</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero minus laborum cum nisi
                        perferendis, itaque laudantium dolores nesciunt dolore, alias enim eum qui fugiat ullam.
                        Accusamus, culpa nulla? Harum, non!.</p>
                </div>
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