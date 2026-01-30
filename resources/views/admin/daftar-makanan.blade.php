<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Makanan</title>
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
            <div class="table-wrapper">
                <h3>List Menu Makan</h3>

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

                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Menu ID</th>
                            <th>Nama Menu</th>
                            <th>Harga Menu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftarMakanan as $item)
                            <tr>
                                <td>{{ $item->menu_id }}</td>
                                <td>{{ $item->nama_menu }}</td>
                                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                <td>
                                    <form method="POST" action="{{ route('delete.makanan', $item->menu_id) }}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn-hapus">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

    </div>
</body>

</html>
