<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>

<body>

    <main class="main-container">
        <div class="login-container">
            <div class="login-box">

                <!-- BAGIAN GAMBAR -->
                <div class="login-image">
                    <img src="/images/logoo.png" alt="Resto Image">
                </div>

                <!-- BAGIAN FORM -->
                <div class="login-form">
                    <h2>Admin Login</h2>

                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group">
                            <input type="username" name="username" placeholder="Username" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>

                        <button type="submit">Login</button>
                    </form>
                </div>

            </div>
        </div>
    </main>

</body>

</html>
