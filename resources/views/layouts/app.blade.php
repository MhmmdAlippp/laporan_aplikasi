<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- GLOBAL CSS (yang dipakai semua halaman) --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- CSS KHUSUS HALAMAN --}}
    @yield('styles')

    {{-- Remix Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>
<style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Poppins", sans-serif;
}

    </style>
<body>

    <div class="layout">

        {{-- SIDEBAR --}}
        @include('layouts.sidebar')

        <div class="main-wrapper">

            {{-- HEADER --}}
            @include('layouts.header')

            {{-- CONTENT (halaman tampil di sini) --}}
            <main class="content">
                @yield('content')
            </main>

        </div>

    </div>

</body>
</html>
