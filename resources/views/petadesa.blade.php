@extends('layouts.app')

@section('content')
    <x-navbar />

    <main class="bg-primary text-on-primary pt-28 pb-12 md:pt-36 md:pb-16 px-margin-mobile md:px-gutter min-h-screen">
        <div class="max-w-container-max mx-auto">
            <div class="mb-8">
                <h1 class="font-headline-xl text-headline-xl text-tertiary-fixed font-bold mb-2">Peta Wilayah Interaktif</h1>
                <p class="font-body-lg text-on-primary/80">Jelajahi batas wilayah, objek penting, serta fasilitas umum yang
                    ada di Desa Sumberarum secara spasial.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-stretch">
                <div class="md:col-span-4 bg-surface-container rounded-3xl p-6 flex flex-col gap-6 text-on-surface">
                    <h2 class="font-headline-lg text-headline-lg text-primary font-bold">Informasi Peta</h2>
                    <p class="font-body-md text-on-surface-variant leading-relaxed">
                        Peta ini menampilkan lokasi objek dan fasilitas umum di wilayah Desa Sumberarum. Gunakan kontrol
                        layer di pojok kanan atas peta untuk menampilkan atau menyembunyikan layer tertentu.
                    </p>

                    <div class="border-t border-on-surface/10 pt-4 flex flex-col gap-3">
                        <h3 class="font-headline-md text-primary font-semibold">Legenda / Keterangan</h3>
                        <div class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded-sm bg-green-500/40 border border-green-700 inline-block"></span>
                            <span class="font-body-sm text-sm">Batas Wilayah Dusun</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded-sm bg-yellow-500/40 border border-yellow-700 inline-block"></span>
                            <span class="font-body-sm text-sm">Lahan Pertanian</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded-sm bg-sky-500/40 border border-sky-700 inline-block"></span>
                            <span class="font-body-sm text-sm">Penggunaan Lahan</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded-sm bg-red-500/40 border border-red-700 inline-block"></span>
                            <span class="font-body-sm text-sm">Bangunan</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded-full bg-purple-500 inline-block"></span>
                            <span class="font-body-sm text-sm">Sarana Prasarana (Titik)</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-4 h-4 rounded-full bg-orange-500 inline-block"></span>
                            <span class="font-body-sm text-sm">Wisata (Titik)</span>
                        </div>
                    </div>
                </div>

                <div
                    class="md:col-span-8 relative rounded-3xl overflow-hidden min-h-[550px] shadow-2xl border border-white/10">
                    <div id="map" class="w-full h-full min-h-[550px] z-0"></div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            })

            var map = L.map('map', {
                center: [-7.5500, 110.2200],
                zoom: 13,
                layers: [osm]
            })

            var layerBatasAdmin = L.layerGroup().addTo(map)
            var layerPertanian = L.layerGroup().addTo(map)
            var layerPL = L.layerGroup().addTo(map)
            var layerBangunan = L.layerGroup().addTo(map)
            var layerSarpras = L.layerGroup().addTo(map)
            var layerWisata = L.layerGroup().addTo(map)

            var baseMaps = {
                "OpenStreetMap": osm
            }

            var overlayMaps = {
                "Batas Admin": layerBatasAdmin,
                "Lahan Pertanian": layerPertanian,
                "Penggunaan Lahan": layerPL,
                "Bangunan": layerBangunan,
                "Sarana Prasarana": layerSarpras,
                "Wisata": layerWisata
            }

            L.control.layers(baseMaps, overlayMaps, {
                collapsed: false
            }).addTo(map)

            function loadLayer(url, layerGroup, options) {
                return fetch(url)
                    .then(function(res) {
                        if (!res.ok) throw new Error('Status ' + res.status)
                        return res.json()
                    })
                    .then(function(data) {
                        if (data && data.features) {
                            var geojson = L.geoJSON(data, options)
                            layerGroup.addLayer(geojson)
                            return geojson
                        }
                    })
                    .catch(function(err) {
                        console.error('Gagal memuat layer dari ' + url, err)
                    })
            }

            loadLayer('/batas-admin', layerBatasAdmin, {
                style: {
                    color: '#15803d',
                    weight: 2,
                    opacity: 0.8,
                    fillColor: '#22c55e',
                    fillOpacity: 0.35
                },
                onEachFeature: function(feature, layer) {
                    if (feature.properties) {
                        var props = feature.properties
                        layer.bindPopup(
                            '<div class="p-1">' +
                            '<h4 class="font-bold text-base mb-1">Dusun ' + (props.nama_dusun ||
                                '-') + '</h4>' +
                            '<p class="text-xs">Desa: ' + (props.desa || '-') + '</p>' +
                            '<p class="text-xs">Kecamatan: ' + (props.kecamatan || '-') + '</p>' +
                            '</div>'
                        )
                    }
                }
            }).then(function(layer) {
                if (layer && layer.getBounds().isValid()) {
                    map.fitBounds(layer.getBounds())
                }
            })

            loadLayer('/pertanian', layerPertanian, {
                filter: function(feature) {
                    return feature.geometry && feature.geometry.coordinates && feature.geometry
                        .coordinates.length > 0
                },
                style: function(feature) {
                    return {
                        color: '#854d0e',
                        weight: 1.5,
                        opacity: 0.8,
                        fillColor: '#eab308',
                        fillOpacity: 0.45
                    }
                },
                onEachFeature: function(feature, layer) {
                    if (feature && feature.properties) {
                        var props = feature.properties
                        var popupContent = '<div class="p-1 text-slate-800">' +
                            '<h4 class="font-bold text-sm text-yellow-800 mb-1">Lahan Pertanian</h4>' +
                            '<p class="text-xs"><b>Jenis Lahan:</b> ' + (props.jenis_lahan || '-') +
                            '</p>' +
                            '<p class="text-xs"><b>Dusun:</b> ' + (props.nama_dusun || '-') + '</p>' +
                            '<p class="text-xs"><b>Desa:</b> ' + (props.desa || '-') + '</p>' +
                            '<p class="text-xs"><b>Kecamatan:</b> ' + (props.kecamatan || '-') +
                            '</p>' +
                            '</div>'
                        layer.bindPopup(popupContent)
                    }
                }
            })

            loadLayer('/pl', layerPL, {
                filter: function(feature) {
                    return feature.geometry && feature.geometry.coordinates && feature.geometry
                        .coordinates.length > 0
                },
                style: {
                    color: '#0369a1',
                    weight: 1.5,
                    opacity: 0.8,
                    fillColor: '#0ea5e9',
                    fillOpacity: 0.35
                },
                onEachFeature: function(feature, layer) {
                    if (feature && feature.properties) {
                        var props = feature.properties
                        var popupContent = '<div class="p-1 text-slate-800">' +
                            '<h4 class="font-bold text-sm text-sky-800 mb-1">Penggunaan Lahan</h4>' +
                            '<p class="text-xs"><b>Jenis PL:</b> ' + (props.jenis_pl || '-') + '</p>' +
                            '<p class="text-xs"><b>Dusun:</b> ' + (props.nama_dusun || '-') + '</p>' +
                            '<p class="text-xs"><b>Desa:</b> ' + (props.desa || '-') + '</p>' +
                            '<p class="text-xs"><b>Kecamatan:</b> ' + (props.kecamatan || '-') +
                            '</p>' +
                            '</div>'
                        layer.bindPopup(popupContent)
                    }
                }
            })

            loadLayer('/bangunan', layerBangunan, {
                filter: function(feature) {
                    return feature.geometry && feature.geometry.coordinates && feature.geometry
                        .coordinates.length > 0
                },
                pointToLayer: function(feature, latlng) {
                    return L.circleMarker(latlng, {
                        radius: 4,
                        fillColor: '#ef4444',
                        color: '#b91c1c',
                        weight: 1,
                        opacity: 1,
                        fillOpacity: 0.8
                    })
                },
                style: function(feature) {
                    return {
                        color: '#b91c1c',
                        weight: 1.5,
                        opacity: 0.8,
                        fillColor: '#ef4444',
                        fillOpacity: 0.4
                    }
                },
                onEachFeature: function(feature, layer) {
                    if (feature && feature.properties) {
                        var props = feature.properties
                        var popupContent = '<div class="p-1 text-slate-800">' +
                            '<h4 class="font-bold text-sm text-red-700 mb-1">' + (props.fungsi ||
                                'Bangunan') + '</h4>' +
                            '<p class="text-xs"><b>Jenis:</b> ' + (props.jenis || '-') + '</p>' +
                            '<p class="text-xs"><b>Lokasi:</b> Dusun ' + (props.nama_dusun || '-') +
                            ' (RT ' + (props.rt || '-') + '/RW ' + (props.rw || '-') + ')</p>' +
                            '<p class="text-xs"><b>Material:</b> ' + (props.material || '-') +
                            ' (Atap: ' + (props.atap || '-') + ')</p>' +
                            '<p class="text-xs"><b>Jumlah Lantai:</b> ' + (props.jumlah_lantai || '-') +
                            ' (' + (props.jenis_lantai || '-') + ')</p>' +
                            '<p class="text-xs"><b>Keterangan:</b> ' + (props.keterangan || '-') +
                            '</p>' +
                            '</div>'
                        layer.bindPopup(popupContent)
                    }
                }
            })

            loadLayer('/sarpras', layerSarpras, {
                filter: function(feature) {
                    return feature.geometry && feature.geometry.coordinates && feature.geometry
                        .coordinates.length > 0
                },
                pointToLayer: function(feature, latlng) {
                    return L.circleMarker(latlng, {
                        radius: 6,
                        fillColor: '#a855f7',
                        color: '#6b21a8',
                        weight: 1.5,
                        opacity: 1,
                        fillOpacity: 0.85
                    })
                },
                onEachFeature: function(feature, layer) {
                    if (feature && feature.properties) {
                        var props = feature.properties
                        var popupContent = '<div class="p-1 text-slate-800">' +
                            '<h4 class="font-bold text-sm text-purple-800 mb-1">Sarana Prasarana</h4>' +
                            '<p class="text-xs"><b>Toponim:</b> ' + (props.toponim || '-') + '</p>' +
                            '<p class="text-xs"><b>Kelas:</b> ' + (props.kelas || '-') + '</p>' +
                            '</div>'
                        layer.bindPopup(popupContent)
                    }
                }
            })

            loadLayer('/wisata', layerWisata, {
                pointToLayer: function(feature, latlng) {
                    return L.circleMarker(latlng, {
                        radius: 7,
                        fillColor: '#f97316',
                        color: '#c2410c',
                        weight: 1.5,
                        opacity: 1,
                        fillOpacity: 0.9
                    })
                },
                onEachFeature: function(feature, layer) {
                    if (feature.properties) {
                        var props = feature.properties
                        layer.bindPopup('<b>Wisata</b><br>' + (props.nama || props.nama_wisata ||
                            'Destinasi Wisata'))
                    }
                }
            })

            setTimeout(function() {
                map.invalidateSize()
            }, 300)
        })
    </script>
@endpush
