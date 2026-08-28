<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SarprasController extends Controller
{
    public function index()
    {
        $data = DB::table('sarpras')
            ->whereNotNull('geom')
            ->whereRaw('ST_IsEmpty(geom) = false')
            ->select(
                'id',
                'kelas',
                'toponim',
                DB::raw('ST_AsGeoJSON(
                    ST_Centroid(
                        CASE
                            WHEN ST_SRID(geom) = 4326 THEN geom
                            WHEN ST_SRID(geom) = 32749 THEN ST_Transform(geom, 4326)
                            WHEN ST_X(ST_Centroid(geom)) > 1000 THEN ST_Transform(ST_SetSRID(geom, 32749), 4326)
                            ELSE ST_SetSRID(geom, 4326)
                        END
                    )
                ) as geom')
            )
            ->get();

        $features = $data->map(function ($row) {
            return [
                'type' => 'Feature',
                'geometry' => $row->geom ? json_decode($row->geom) : null,
                'properties' => [
                    'id' => $row->id,
                    'kelas' => $row->kelas,
                    'toponim' => $row->toponim,
                ],
            ];
        });

        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $features,
        ]);
    }
}
