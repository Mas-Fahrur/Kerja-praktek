<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>

    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

</head>
<body>

<div class="menu-container">
    <h1 class="menu-title">Daftar Menu</h1>

    {{-- ============================
        KATEGORI MAKANAN
    ============================= --}}
    <h2 class="menu-subtitle"> Makanan</h2>
    <p class="menu-note">*Semua menu sudah termasuk dengan nasi</p>
    <div class="menu-grid">

        @php
            $makanan = [
                ['nama' => 'Sop Sayur', 'harga' => 10000, 'img' => 'makanan-1'],
                ['nama' => 'Chatauge', 'harga' => 7000, 'img' => 'makanan-2'],
                ['nama' => 'Bihun Goreng', 'harga' => 8000, 'img' => 'makanan-3'],
                ['nama' => 'Oseng Pare', 'harga' => 7000, 'img' => 'makanan-4'],
                ['nama' => 'Oseng daun singkong', 'harga' => 7000, 'img' => 'makanan-5'],
                ['nama' => 'Terong Balado', 'harga' => 7000, 'img' => 'makanan-6'],
                ['nama' => 'Mie Goreng', 'harga' => 6000, 'img' => 'makanan-7'],
                ['nama' => 'Nasi putih', 'harga' => 4000, 'img' => 'makanan-8'],
            ];
        @endphp

        @foreach ($makanan as $item)
            <div class="menu-box">
                <div class="img {{ $item['img'] }}"></div>
                <div class="info">
                    <h4>{{ $item['nama'] }}</h4>
                    <p>Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                </div>
            </div>
        @endforeach

    </div>

    {{-- ============================
        KATEGORI MINUMAN
    ============================= --}}
    <h2 class="menu-subtitle"> Minuman</h2>
    <div class="menu-grid">

        @php
            $minuman = [
                ['nama' => 'Es Teh', 'harga' => 3000, 'img' => 'minuman-1'],
                ['nama' => 'Es Jeruk', 'harga' => 4000, 'img' => 'minuman-2'],
                ['nama' => 'Es Kampul', 'harga' => 4000, 'img' => 'minuman-3'],
            ];
        @endphp

        @foreach ($minuman as $item)
            <div class="menu-box">
                <div class="img {{ $item['img'] }}"></div>
                <div class="info">
                    <h4>{{ $item['nama'] }}</h4>
                    <p>Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                </div>
            </div>
        @endforeach

    </div>

    {{-- ============================
        KATEGORI LAIN-LAIN
    ============================= --}}
    <h2 class="menu-subtitle">Lain-lain</h2>
    <div class="menu-grid">

        @php
            $lain = [
                ['nama' => 'Tahu Goreng/biji', 'harga' => 1000, 'img' => 'lain-1'],
                ['nama' => 'Tempe Goreng/biji', 'harga' => 1000, 'img' => 'lain-2'],
                ['nama' => 'Telor', 'harga' => 5000, 'img' => 'lain-3'],
                ['nama' => 'Ayam Goreng', 'harga' => 5000, 'img' => 'lain-4'],
                ['nama' => 'Krupuk', 'harga' => 2000, 'img' => 'lain-5'],
            ];
        @endphp

        @foreach ($lain as $item)
            <div class="menu-box">
                <div class="img {{ $item['img'] }}"></div>
                <div class="info">
                    <h4>{{ $item['nama'] }}</h4>
                    <p>Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                </div>
            </div>
        @endforeach

    </div>

</div>
<a href="/" class="btn-back">← Kembali ke Menu Utama</a>

</body>
</html>
