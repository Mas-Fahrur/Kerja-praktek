<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu</title>

    <link rel="stylesheet" href="/css/menu.css">


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
            @foreach ($menuMakanan as $item)
                <div class="menu-box">
                    <div class="img" style="background-image: url('{{ asset('images/' . $item->gambar) }}')">
                    </div>
                    <div class="info">
                        <h4>{{ $item->nama_menu }}</h4>
                        <p>Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- ============================
        KATEGORI MINUMAN
    ============================= --}}
        <h2 class="menu-subtitle"> Minuman</h2>
        <div class="menu-grid">
            @foreach ($menuMinuman as $item)
                <div class="menu-box">
                    <div class="img" style="background-image: url('{{ asset('images/' . $item->gambar) }}')">
                    </div>
                    <div class="info">
                        <h4>{{ $item->nama_menu }}</h4>
                        <p>Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- ============================
        KATEGORI LAIN-LAIN
    ============================= --}}
        <h2 class="menu-subtitle">Lain-lain</h2>
        <div class="menu-grid">
            @foreach ($menuLainnya as $item)
                <div class="menu-box">
                    <div class="img" style="background-image: url('{{ asset('images/' . $item->gambar) }}')">
                    </div>
                    <div class="info">
                        <h4>{{ $item->nama_menu }}</h4>
                        <p>Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <a href="/" class="btn-back">← Kembali ke Menu Utama</a>

</body>

</html>
