<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('pl')
            ->whereNotNull('geom')
            ->select(
                'id',
                'jenis_pl',
                'nama_dusun',
                'desa',
                'kecamatan',
                DB::raw('ST_AsGeoJSON(CASE WHEN ST_SRID(geom) = 0 THEN ST_SetSRID(geom, 4326) ELSE ST_Transform(geom, 4326) END) as geom')
            )
            ->get();

        $features = $data->map(function ($row) {
            return [
                'type' => 'Feature',
                'geometry' => $row->geom ? json_decode($row->geom) : null,
                'properties' => [
                    'id' => $row->id,
                    'jenis_pl' => $row->jenis_pl,
                    'nama_dusun' => $row->nama_dusun,
                    'desa' => $row->desa,
                    'kecamatan' => $row->kecamatan,
                ],
            ];
        });

        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $features,
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
