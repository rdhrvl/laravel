<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function index()
    {
        $title = 'Menu Utama Operasi Matematika';
        // Laravel Index : akan diload di awal
        return view('latihan', compact('title'));
    }

    public function tambah()
    {
        $jumlah = 0;
        // $title = 'Penjumlahan';
        // return view('tambah', ['jumlah' => $jumlah]);
        return view('tambah', compact('jumlah'));
    }

    public function actionTambah(Request $request)
    {
        // $title = 'Penjumlahan';
        $angka1 = $request->angka_1;
        $angka2 = $request->input('angka_2');

        $jumlah = $angka1 + $angka2;

        return view('tambah', compact('jumlah'));
    }

    public function kurang()
    {
        $kurang = 0;
        $title = 'Pengurangan';
        // return view('kurang', ['kurang' => $kurang]);
        return view('kurang', compact('kurang','title'));
    }

    public function actionKurang(Request $request)
    {
        $title = 'Pengurangan';
        $angka1 = $request->angka_1;
        $angka2 = $request->input('angka_2');

        $kurang = $angka1 - $angka2;

        return view('kurang', compact('kurang', 'title'));
    }

    public function kali()
    {
        $kali = 0;
        $title = 'Perkalian';
        // return view('kurang', ['kurang' => $kurang]);
        return view('kali', compact('kali','title'));
    }

    public function actionKali(Request $request)
    {
        $title = 'Perkalian';
        $angka1 = $request->angka_1;
        $angka2 = $request->input('angka_2');

        $kali = $angka1 * $angka2;

        return view('kali', compact('kali', 'title'));
    }

    public function bagi()
    {
        $bagi = 0;
        $title = 'Pembagian';
        // return view('kurang', ['kurang' => $kurang]);
        return view('bagi', compact('bagi','title'));
    }

    public function actionBagi(Request $request)
    {
        $title = 'Pembagian';
        $angka1 = $request->angka_1;
        $angka2 = $request->input('angka_2');

        $bagi = $angka1 / $angka2;

        return view('bagi', compact('bagi', 'title'));
    }





}
