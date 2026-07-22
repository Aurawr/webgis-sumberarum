<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfografisController extends Controller
{
    public function index()
    {
        $data = [
            'demografi' => [
                'total' => DB::table('penduduk')->count() ?: 3542,
            ],
            'luas_wilayah' => DB::table('profil_desa')->value('luas') ?: 450,
            'administrasi' => [
                'rt' => DB::table('wilayah')->where('jenis', 'RT')->count() ?: 18,
                'rw' => DB::table('wilayah')->where('jenis', 'RW')->count() ?: 6,
                'dusun' => DB::table('wilayah')->where('jenis', 'DUSUN')->count() ?: 4,
            ],
            'lahan' => [
                'pertanian' => DB::table('penggunaan_lahan')->where('kategori', 'pertanian')->value('persentase') ?: 55,
                'pemukiman' => DB::table('penggunaan_lahan')->where('kategori', 'pemukiman')->value('persentase') ?: 25,
                'hutan' => DB::table('penggunaan_lahan')->where('kategori', 'hutan')->value('persentase') ?: 15,
                'fasilitas' => DB::table('penggunaan_lahan')->where('kategori', 'fasilitas')->value('persentase') ?: 5,
            ],
            'infrastruktur' => DB::table('bangunan')->count() ?: 840,
            'wisata' => DB::table('destinasi_wisata')->count() ?: 5,
            'sarpras' => [
                'pendidikan' => DB::table('sarpras')->where('kategori', 'pendidikan')->count() ?: 4,
                'kesehatan' => DB::table('sarpras')->where('kategori', 'kesehatan')->count() ?: 2,
                'ibadah' => DB::table('sarpras')->where('kategori', 'ibadah')->count() ?: 8,
                'olahraga' => DB::table('sarpras')->where('kategori', 'olahraga')->count() ?: 3,
            ]
        ];

        return view('infografis', compact('data'));
    }
}
