<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BangunanController extends Controller
{
    public function index()
    {
        $data = DB::table('bangunan')
            ->whereNotNull('geom')
            ->select(
                'id',
                'nama_dusun',
                'desa',
                'kecamatan',
                'rt',
                'rw',
                'fungsi',
                'jenis',
                'material',
                'atap',
                'jumlah_lantai',
                'jenis_lantai',
                'keterangan',
                DB::raw('ST_AsGeoJSON(
                    CASE
                        WHEN ST_X(ST_Centroid(geom)) > 180 THEN ST_Transform(ST_SetSRID(geom, 32749), 4326)
                        ELSE ST_SetSRID(geom, 4326)
                    END
                ) as geom')
            )
            ->get();

        $features = $data->map(function ($row) {
            return [
                'type' => 'Feature',
                'geometry' => $row->geom ? json_decode($row->geom) : null,
                'properties' => [
                    'id' => $row->id,
                    'nama_dusun' => $row->nama_dusun,
                    'desa' => $row->desa,
                    'kecamatan' => $row->kecamatan,
                    'rt' => $row->rt,
                    'rw' => $row->rw,
                    'fungsi' => $row->fungsi,
                    'jenis' => $row->jenis,
                    'material' => $row->material,
                    'atap' => $row->atap,
                    'jumlah_lantai' => $row->jumlah_lantai,
                    'jenis_lantai' => $row->jenis_lantai,
                    'keterangan' => $row->keterangan,
                ],
            ];
        });

        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $features,
        ]);
    }
}
