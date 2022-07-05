<?php

namespace App\Http\Controllers;




class Home extends Controller
{

    public function home(){
        return view('pages.halaman_depan.index');
    }


}
