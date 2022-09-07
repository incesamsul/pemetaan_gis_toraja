<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Destination;
use App\Models\Komentar;
use App\Models\Kuliner;
use App\Models\Penginapan;
use Illuminate\Http\Request;

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
        $data['berita'] = Berita::all();
        return view('pages.halaman_depan.full_map', $data);
    }

    public function destination()
    {
        $data['destination'] = Destination::all();
        return view('pages.halaman_depan.destination', $data);
    }

    public function penginapan()
    {
        $data['penginapan'] = Penginapan::all();
        return view('pages.halaman_depan.penginapan', $data);
    }

    public function kuliner()
    {
        $data['kuliner'] = Kuliner::all();
        return view('pages.halaman_depan.kuliner', $data);
    }

    public function berita()
    {
        $data['berita'] = Berita::orderBy('created_at', 'ASC')->get();;
        return view('pages.halaman_depan.berita', $data);
    }

    public function singleDestination($idDestination)
    {
        $data['destination'] = Destination::where('id_destination', $idDestination)->first();
        $data['komentar'] = Komentar::where('id_destination', $idDestination)->get();
        return view('pages.halaman_depan.single_destination', $data);
    }

    public function singlePenginapan($idPenginapan)
    {
        $data['penginapan'] = Penginapan::where('id_penginapan', $idPenginapan)->first();
        return view('pages.halaman_depan.single_penginapan', $data);
    }

    public function singleKuliner($idKuliner)
    {
        $data['kuliner'] = Kuliner::where('id_kuliner', $idKuliner)->first();
        return view('pages.halaman_depan.single_kuliner', $data);
    }

    public function singleBerita($idBerita)
    {
        $data['berita'] = Berita::where('id_berita', $idBerita)->first();
        $data['artikel_terkait'] = Berita::limit(5)->get();
        return view('pages.halaman_depan.single_berita', $data);
    }

    public function komentari(Request $request, $idDestination)
    {
        Komentar::create([
            'id_destination' => $idDestination,
            'nama' => $request->nama,
            'komentar' => $request->komentar,
        ]);
        return redirect()->back()->with('message', 'komentar tersimpan');
    }
}
