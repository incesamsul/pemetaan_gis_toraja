@extends('layouts.v_template')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-icon shadow-dark bg-dark">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total </h4>
                    </div>
                    <div class="card-body">
                        59
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-icon shadow-dark bg-dark">
                    <i class="fas fa-calendar-day"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Hari dan tanggal sekarang</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-small mt-3">{{ date('l, d M Y H:i:s') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-icon shadow-dark bg-dark">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Waktu sekarang</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-small mt-3">{{ date('H:i:s') }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Anda berada di halaman dashboard</h4>
                </div>
                <div class="card-body">
                    <h5>Hi, Selamat datang</h5>
                    <p>Segala aktifitas yang anda lakukan akan kami pantau, mhon gunakan aplikasi ini dengan bijaksana.
                    </p>
                    <p>Dengan adanya apilkasi ini kami berharap agar mempermudah Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quibusdam quia rem ab, aspernatur nisi asperiores laudantium repellendus, optio ad sequi! Blanditiis quo, rerum eligendi maiores dicta ipsum iure! Inventore!lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam aliquid fuga ea expedita culpa praesentium provident magnam. Iste, illum! Nesciunt ullam itaque ratione asperiores eaque corporis minima, recusandae quo eligendi!</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@section('script')
<script>
    $('#liDashboard').addClass('active');

</script>
@endsection
