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
				<div class="content-single">
					<div class="content-single-title">
						<h3>{{ $berita->judul_berita }}</h3>
						<img src="{{ asset('data/gambar_berita/' . $berita->gambar_berita) }}" class="image">
					</div>
					<div class="content-single-body">
                    <p>{{ $berita->isi_berita }}</p>


					<div class="label">
						<a href=""><span class="fas fa-newspaper"></span> &nbsp; News</a>
						<a href=""><span class="fas fa-share"></span> &nbsp; Share</a>
						<a href=""><span class="fas fa-heart"></span> &nbsp; Like</a>
					</div>
					</div>
					<div class="content-single-footer">
						<h3 class="text-center">Artikel Terkait</h3>
						<div class="terkait">
							@foreach ($artikel_terkait as $artikel)
                            <div class="col">
								<img src="{{ asset('data/gambar_berita/'. $artikel->gambar_berita) }}"> <br><br>
								<a href="#"><h3 class="text-center">
									{{ $artikel->judul_berita }}
								</h3></a>
							</div>
                            @endforeach
						</div>
					</div>
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

