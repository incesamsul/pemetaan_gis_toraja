<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Destination;
use App\Models\Kuliner;
use App\Models\Penginapan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Admin extends Controller
{

    protected $userModel;
    protected $profileUserModel;
    protected $kritikSaranModel;
    protected $kuisionerModel;
    protected $penilaianModel;


    public function __construct()
    {
        $this->userModel = new User();
    }

    public function pengguna()
    {
        $data['pengguna'] = $this->userModel->getAllUser();
        return view('pages.pengguna.index', $data);
    }


    public function destination()
    {
        $data['destination'] = Destination::all();
        return view('pages.destination.index', $data);
    }

    public function berita()
    {
        $data['berita'] = Berita::all();
        return view('pages.berita.index', $data);
    }

    public function penginapan()
    {
        $data['penginapan'] = Penginapan::all();
        return view('pages.penginapan.index', $data);
    }

    public function kuliner()
    {
        $data['kuliner'] = Kuliner::all();
        return view('pages.kuliner.index', $data);
    }



    public function profileUser()
    {
        $data['user'] = User::all();
        $data['profile'] = $this->profileUserModel->getProfileUser();
        return view('pages.rekaptulasi_data.index', $data);
    }






    // fetch data user by admin
    function fetchData(Request $request)
    {
        if ($request->ajax()) {
            $sort_by = $request->get('sortby');
            $sort_type = $request->get('sorttype');
            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            if ($request->filter == "") {
                $data['pengguna'] = DB::table('users')
                    ->where('role', '!=', 'Admin')
                    ->Where('name', 'like', '%' . $query . '%')
                    ->Where('email', 'like', '%' . $query . '%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(5);
            } else {
                $data['pengguna'] = DB::table('users')
                    ->where('role', '!=', 'Admin')
                    ->Where('role', '=', $request->filter)
                    ->Where('name', 'like', '%' . $query . '%')
                    ->Where('email', 'like', '%' . $query . '%')
                    ->orderBy($sort_by, $sort_type)
                    ->paginate(5);
            }

            return view('pages.pengguna.users_data', $data)->render();
        }
    }

    // CRUD KULINER
    public function tambahKuliner(Request $request)
    {

        $image = $request->file('gambar_kuliner');
        $imageName = uniqid() . '.' . '.jpg';
        $image->move(public_path('data/gambar_kuliner/'), $imageName);

        Kuliner::create([
            'nama_kuliner' => $request->nama_kuliner,
            'harga' => $request->harga,
            'deskripsi_kuliner' => $request->deskripsi_kuliner,
            'gambar_kuliner' => $imageName,
        ]);
        return redirect()->back()->with('message', 'berita Berhasil di tambahkan');
    }

    public function hapusKuliner(Request $request)
    {
        Kuliner::where([
            ['id_kuliner', '=', $request->id_kuliner]
        ])->delete();

        return 1;
    }

    // CRUD BERITA
    public function tambahBerita(Request $request)
    {

        $image = $request->file('gambar_berita');
        $imageName = uniqid() . '.' . '.jpg';
        $image->move(public_path('data/gambar_berita/'), $imageName);

        Berita::create([
            'judul_berita' => $request->judul_berita,
            'tgl_berita' => $request->tgl_berita,
            'isi_berita' => $request->isi_berita,
            'gambar_berita' => $imageName,
        ]);
        return redirect()->back()->with('message', 'berita Berhasil di tambahkan');
    }

    // CRUD DESTINATION
    public function tambahPenginapan(Request $request)
    {

        $image = $request->file('gambar_penginapan');
        $imageName = uniqid() . '.' . '.jpg';
        $image->move(public_path('data/gambar_penginapan/'), $imageName);

        Penginapan::create([
            'nama_penginapan' => $request->nama_penginapan,
            'harga_tiket' => $request->harga_tiket,
            'link_pemetaan' => $request->link_pemetaan,
            'ket_pemetaan' => $request->ket_pemetaan,
            'deskripsi_penginapan' => $request->deskripsi_penginapan,
            'gambar_penginapan' => $imageName,
        ]);
        return redirect()->back()->with('message', 'penginapan Berhasil di tambahkan');
    }

    public function hapusPenginapan(Request $request)
    {
        Destination::where([
            ['id_penginapan', '=', $request->id_penginapan]
        ])->delete();

        return 1;
    }

    // CRUD DESTINATION
    public function tambahDestination(Request $request)
    {

        $image = $request->file('gambar_destination');
        $imageName = uniqid() . '.' . '.jpg';
        $image->move(public_path('data/gambar_destination/'), $imageName);

        Destination::create([
            'nama_destination' => $request->nama_destination,
            'harga_tiket' => $request->harga_tiket,
            'link_pemetaan' => $request->link_pemetaan,
            'ket_pemetaan' => $request->ket_pemetaan,
            'deskripsi_destination' => $request->deskripsi_destination,
            'gambar_destination' => $imageName,
        ]);
        return redirect()->back()->with('message', 'Destinasi Berhasil di tambahkan');
    }

    public function hapusDestination(Request $request)
    {
        Destination::where([
            ['id_destination', '=', $request->id_destination]
        ])->delete();

        return 1;
    }


    // CRUD PENGGUNA

    public function createPengguna(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->email),
            'role' => $request->tipe_pengguna,
        ]);
        return redirect('/admin/pengguna')->with('message', 'Pengguna Berhasil di tambahkan');
    }

    public function updatePengguna(Request $request)
    {
        $user = User::where([
            ['id', '=', $request->id]
        ])->first();
        $user->update([
            'name' => $request->nama,
            'email' => $request->email,
            'role' => $request->tipe_pengguna,
        ]);
        return redirect('/admin/pengguna')->with('message', 'Pengguna Berhasil di update');
    }

    public function deletePengguna(Request $request)
    {
        User::destroy($request->post('user_id'));
        return 1;
    }
}
