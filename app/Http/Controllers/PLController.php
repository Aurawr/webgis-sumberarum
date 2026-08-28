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
            ->select(
                'id',
                'jenis_pl',
                'nama_dusun',
                'desa',
                'kecamatan',
                DB::raw('ST_AsGeoJSON(geom) as geom')
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
