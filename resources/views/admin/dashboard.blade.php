<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
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
            <h1>Dashboard</h1>
            <p>Selamat datang di dashboard admin</p>

            <!-- contoh konten -->
            <div class="card-container">
                <div class="card">
                    <h3>Jumlah Semua Menu</h3>
                    <p>{{ $jumlahSemuaMenu }}</p>
                </div>
                <div class="card">
                    <h3>Jumlah Semua Menu Makanan</h3>
                    <p>{{ $menuMakanan }}</p>
                </div>
                <div class="card">
                    <h3>Jumlah Semua Menu Minuman</h3>
                    <p>{{ $menuMinuman }}</p>
                </div>
                <div class="card">
                    <h3>Jumlah Semua Menu Lainnya</h3>
                    <p>{{ $menuLainnya }}</p>
                </div>
            </div>
        </main>

    </div>
</body>

</html>
