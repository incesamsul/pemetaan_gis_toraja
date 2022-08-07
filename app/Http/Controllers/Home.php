<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Destination;

class Home extends Controller
{

    public function home()
    {
        $data['rekomendasi1'] = Destination::first();
        $data['rekomendasi2'] = Destination::skip(1)->first();
        $data['rekomendasi3'] = Destination::skip(2)->first();
        $data['rekomendasi4'] = Destination::skip(3)->first();
        $data['rekomendasi5'] = Destination::skip(4)->first();
        $data['berita_terbaru'] = Berita::limit(3)->latest()->get();
        return view('pages.halaman_depan.index', $data);
    }

    public function fullMap()
    {
        return view('pages.halaman_depan.full_map');
    }

    public function destination()
    {
        $data['destination'] = Destination::all();
        return view('pages.halaman_depan.destination', $data);
    }

    public function berita()
    {
        $data['berita'] = Berita::all();
        return view('pages.halaman_depan.berita', $data);
    }

    public function singleDestination($idDestination)
    {
        $data['destination'] = Destination::where('id_destination', $idDestination)->first();
        return view('pages.halaman_depan.single_destination', $data);
    }

    public function singleBerita($idBerita)
    {
        $data['berita'] = Berita::where('id_berita', $idBerita)->first();
        $data['artikel_terkait'] = Berita::limit(5)->get();
        return view('pages.halaman_depan.single_berita', $data);
    }
}
