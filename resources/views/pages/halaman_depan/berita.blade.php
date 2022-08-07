@extends('layouts_halaman_depan.v_template')

@section('content')

<section class="section-header-single">
	<img src="{{ asset("img/home/toraja.jpg") }}">
	<div class="overlay">
		<div class="header-title">
			<h3>What's Happen</h3>
			<span class="fas fa-record-vinyl"></span>&nbsp;
			<span class="fas fa-record-vinyl"></span>&nbsp;
			<span class="fas fa-record-vinyl"></span>
		</div>
	</section>
</section>

<ul class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li>News</li>
</ul>

<section class="section section-archive">
	<div class="container">
		<div class="row">
			<div class="content">
				@foreach ($berita as $row)
                <div class="col">
					<div class="content-img">
						<img src="{{ asset('data/gambar_berita/' . $row->gambar_berita) }}">
						<span class="label-img"> News</span>
					</div>
					<div class="content-desc">
						<div class="content-desc-title">
							<a href="single-news.html"><h3> {{ $row->judul_berita }}</h3></a>
						</div>
						<div class="content-desc-text">
							<ul class="breadcrumb-post">
								<li><i class="fas fa-calendar"></i>{{ $row->tgl_berita }} &nbsp; / &nbsp;</li>
								<li><i class="fas fa-bookmark"></i> <a href="#">News</a> &nbsp; / &nbsp;</li>
								<li><i class="fas fa-person-booth"></i> Admin</li>
							</ul>
							<p>
								{{ $row->isi_berita }}
							</p>
							<a href="{{ URL::to('/berita/'.$row->id_berita) }}" class="btn btn-md btn-orange" style="margin-top: 10px;">Read More</a>
						</div>
					</div>
				</div>
                @endforeach
					<ul class="pagination">
						<a href="#" class="pagination-arrow arrow-left">
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
			</div>
			<div class="aside">
				<div class="row">
					<div class="aside-content">
						<form method="POST">
							<div class="content-input">
								<input type="text" name="cari" class="form-control" placeholder="Search ...">
							</div>
							<div class="content-btn">
								<button type="submit" class="btn-search"><i class="ion-search"></i></button>
							</div>
						</form>
					</div>
					<div class="aside-content">
						<div class="content-title">
							<b>KATEGORI</b>
						</div>
						<div class="content-body">
							<ul style="padding: 0;list-style: none;">
								<li><a href="news.html">News</a></li>
								<li><a href="news.html">Culture</a></li>
								<li><a href="news.html">Event</a></li>
								<li><a href="news.html">Adventure</a></li>
							</ul>
						</div>
					</div>
					<div class="aside-content">
						<div class="content-title">
							<b>REKOMENDASI</b>
						</div>
						<div class="content-body">
							<ul style="padding: 0;list-style: none;">
								<li><a href="single-news.html">
									Keistimewaan toraja di Kaca Internasional
								</a></li>
								<li><a href="single-news.html">
									Ini Dia! 5 Rekomendasi Wisata Asik di toraja
								</a></li>
								<li><a href="single-news.html">
									Krumunan Gajah yang Tertawa di Kebun Binatang toraja
								</a></li>
								<li><a href="single-news.html">
									Tempat Paling Wajib Dikunjungi Jika Kamu Main ke toraja
								</a></li>
							</ul>
						</div>
					</div>
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

