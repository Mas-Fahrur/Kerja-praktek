<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>

<body>
    <div class="dashboard">

        <!-- Sidebar -->
        <aside class="sidebar">
            <a class="logo" href="{{ route('admin.dashboard') }}">
                <h2>
                    Dashboard Admin
                </h2>
            </a>
            <ul class="menu">
                <li><a href="{{ route('admin.makanan') }}">Daftar Makanan</a></li>
                <li><a href="{{ route('admin.minuman') }}">Daftar Minuman</a></li>
                <li><a href="{{ route('admin.lain') }}">Daftar Lain-Lain</a></li>
                <li><a href="{{ route('admin.tambah-menu') }}">Tambah Daftar Makan / Minum</a></li>
                <li>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-logout">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <h1>Tambah Menu Baru</h1>

            <!-- contoh konten -->
            <div class="card">
                {{-- PESAN SUKSES --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- PESAN GAGAL --}}
                @if (session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- ERROR VALIDASI --}}
                @if ($errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('add.menu') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-menu">
                        <label id="id-menu">Menu ID</label>
                        <input type="text" name="id-menu" id="id-menu" placeholder="Masukan ID Menu" required>
                    </div>
                    <div class="box-menu">
                        <label id="nama-menu">Nama Menu</label>
                        <input type="text" name="nama-menu" id="nama-menu" placeholder="Masukan Nama Menu" required>
                    </div>
                    <div class="box-menu">
                        <label id="harga-menu">Harga Menu</label>
                        <input type="number" name="harga-menu" id="harga-menu" placeholder="Masukan Harga Menu"
                            required>
                    </div>
                    <div class="box-menu">
                        <label id="gambar-menu">Gambar</label>
                        <input type="file" name="gambar-menu" id="gambar-menu" placeholder="Masukan gambar" required>
                    </div>

                    <div class="btn-grup">
                        <button type="submit" class="form-btn">
                            Tambah Menu
                        </button>
                        <a href="{{ route('admin.dashboard') }}">
                            <button type="button" class="btn-kembali">
                                Kembali
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </main>

    </div>
</body>

</html>
