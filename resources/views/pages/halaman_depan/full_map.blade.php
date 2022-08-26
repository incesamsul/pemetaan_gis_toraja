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
<section class="section section-archive">
	<div class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="content">
                <iframe width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                title="toraja1" src="//www.arcgis.com/apps/Embed/index.html?webmap=7877d10494304a8b9570d734cc9f71f5&extent=119.4765,-3.219,120.1947,-2.8659&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe>
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
								<li><a href="{{ URL::to('/destination') }}">Destination</a></li>
                                <li><a href="/berita">Berita</a></li>
                                {{-- <li><a data-slide="slides" data-slide-target="{{ URL::to('/kuliner') }}">Rumah makan</a></li> --}}
                                <li><a href="{{ URL::to('/kuliner') }}">Rumah makan</a></li>
                                <li><a href="{{ URL::to('/penginapan') }}">Penginapan</a></li>
                                <li><a href="/full_map"> Full map</a></li>
							</ul>
						</div>
					</div>
					<div class="aside-content">
						<div class="content-title">
							<b>REKOMENDASI</b>
						</div>
						<div class="content-body">
							<ul style="padding: 0;list-style: none;">
                                @foreach ($berita as $row)
                                <li><a href="{{ URL::to('/berita/' . $row->id_berita) }}">
									{{ $row->judul_berita }}
								</a></li>
                                @endforeach
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

