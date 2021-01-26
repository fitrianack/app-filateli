<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('content.index');
    }

    public function kategori()
    {
        return view('content.kategori_lomba');
    }

    public function donasi()
    {
        return view('content.donasi');
    }

    public function paket_perlombaan()
    {
        return view('content.paket_perlombaan');
    }

    public function pembayaran()
    {
        return view('content.pembayaran');
    }

    public function periode_range()
    {
        return view('content.periode_range');
    }

    public function pendaftaran()
    {
        return view('content.pendaftaran');
    }
}
