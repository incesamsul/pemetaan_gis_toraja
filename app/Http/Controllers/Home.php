<?php

namespace App\Http\Controllers;

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
        return view('pages.halaman_depan.index', $data);
    }

    public function destination()
    {
        $data['destination'] = Destination::all();
        return view('pages.halaman_depan.destination', $data);
    }

    public function singleDestination($idDestination)
    {
        $data['destination'] = Destination::where('id_destination', $idDestination)->first();
        return view('pages.halaman_depan.single_destination', $data);
    }
}
