@extends('layouts.v_template')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Anda berada di halaman dashboard</h4>
                </div>
                <div class="card-body">
                    <h5>Hi, Selamat Datang Admin</h5>
                    <p>Segala aktifitas yang anda lakukan akan kami pantau, mohon gunakan aplikasi ini dengan bijaksana.
                    </p>
                    <p>Dengan adanya apilkasi ini kami berharap agar mempermudah admin dalam menginput data destinasi Tana Toraja, berita, penginapan dan kuliner guna untuk mempromosikan pariwisata yang ada di Tana Toraja sehingga dengan adanya aplikasi ini dapat membantu pihak pariwisata dalam mempromosikan wisata dan dapat meningkatkan pendapatan daerah setempat. Saya berharap dengan adanya aplikasi ini dapat berguna dan dapat digunakan dengan semestinya. 
                    <h5>SEMANGAT MENUJU PARIWISATA TORAJA MAJU !! Have Fun:)</h5>
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
