<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Desa Sumberarum - WebGIS</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Leaflet CSS (Untuk Peta Interaktif) -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

    <!-- Konfigurasi Tema Tailwind -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-container": "#b8ab78",
                        "inverse-surface": "#2c322c",
                        "on-primary": "#ffffff",
                        "on-tertiary-container": "#483f17",
                        "secondary-container": "#8bf78c",
                        "surface-container-low": "#eff5ec",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#414940",
                        "on-secondary-container": "#007321",
                        "surface-dim": "#d6dcd2",
                        "on-tertiary-fixed-variant": "#50471d",
                        "surface-bright": "#f5fbf1",
                        "background": "#f5fbf1",
                        "primary": "#002409",
                        "on-error-container": "#93000a",
                        "tertiary": "#685e33",
                        "on-error": "#ffffff",
                        "on-secondary-fixed-variant": "#005315",
                        "on-surface": "#171d17",
                        "surface-container-highest": "#dee4db",
                        "primary-container": "#073b16",
                        "secondary-fixed-dim": "#72dd75",
                        "primary-fixed": "#baf0ba",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "secondary": "#006e1f",
                        "secondary-fixed": "#8efa8f",
                        "on-tertiary-fixed": "#211b00",
                        "surface": "#f5fbf1",
                        "inverse-primary": "#9ed4a0",
                        "outline": "#72796f",
                        "tertiary-fixed-dim": "#d4c692",
                        "error-container": "#ffdad6",
                        "surface-container-high": "#e4eae0",
                        "surface-tint": "#38693e",
                        "outline-variant": "#c1c9bd",
                        "on-primary-fixed-variant": "#205029",
                        "on-primary-fixed": "#002108",
                        "surface-variant": "#dee4db",
                        "primary-fixed-dim": "#9ed4a0",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#74a776",
                        "on-background": "#171d17",
                        "surface-container": "#eaf0e6",
                        "on-secondary-fixed": "#002204",
                        "tertiary-fixed": "#f1e2ab",
                        "inverse-on-surface": "#edf3e9"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "card-padding": "32px",
                        "section-padding": "120px",
                        "margin-mobile": "16px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "display-lg-mobile": ["Plus Jakarta Sans", "sans-serif"],
                        "headline-xl": ["Plus Jakarta Sans", "sans-serif"],
                        "body-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "body-md": ["Plus Jakarta Sans", "sans-serif"],
                        "display-lg": ["Plus Jakarta Sans", "sans-serif"],
                        "label-lg": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", { "lineHeight": "1.3", "fontWeight": "700" }],
                        "display-lg-mobile": ["40px", { "lineHeight": "1.2", "fontWeight": "800" }],
                        "headline-xl": ["48px", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "display-lg": ["64px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                        "label-lg": ["14px", { "lineHeight": "1.4", "letterSpacing": "0.05em", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
    <style>
        .clip-circle { clip-path: circle(50% at 50% 50%); }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased overflow-x-hidden">

    @yield('content')

    <!-- Leaflet JS (Untuk Peta Interaktif) -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @stack('scripts')
</body>
</html>
