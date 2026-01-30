<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Makan Sopsip Junior</title>

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar">
        <div class="nav-container">

            <div class="nav-logo">
                <img src="{{ asset('images/logoo.png') }}" alt="Logo Resto">
            </div>

            <ul class="nav-menu">
                <li><a href="/">BERANDA</a></li>
                <li><a href="#varianmenu">VARIAN MENU</a></li>
                <li><a href="#catering">LAYANAN NASI BOX</a></li>
                <li><a href="#galeri">GALERI</a></li>
            </ul>

        </div>
    </nav>

    <!-- ================= HERO ================= -->
    <section class="hero reveal">
        <h1>Sajian Hidangan<br>masakan jawa</h1>

        <div class="info-box">
            <a href="https://wa.me/+6281326265040" class="badge">Hubungi kami</a>
        </div>

    </section>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- ================= FITUR ================= -->
    <section class="section-fitur reveal">
        <div class="fitur-grid">

            <div class="fitur-card reveal">
                <i class="fa-solid fa-file-lines fitur-icon"></i>
                <h3>Resep Turun temurun</h3>
                <p>Konsistensi resep yang terus tersaji dalam satu mangkuk penuh cita rasa.</p>
            </div>

            <div class="fitur-card reveal">
                <i class="fa-solid fa-book-open fitur-icon"></i>
                <h3>Menu Andalan Lainnya</h3>
                <p>Penikmat kuliner dapat merasakan beragam menu pendamping seperti gorengan, hingga menu khas lainnya.
                </p>
            </div>

            <div class="fitur-card reveal">
                <i class="fa-solid fa-handshake-simple fitur-icon"></i>
                <h3>Aksesibilitas</h3>
                <p>Dapat dinikmati dine-in, takeaway, maupun pemesanan online.</p>
            </div>

        </div>
    </section>

    <!-- ================= ABOUT ================= -->
    <section id="about" class="about-section">
        <div class="about-wrapper">

            <!-- LEFT IMAGE -->
            <div class="about-left reveal-left">
                <img src="/images/sop.jpg" alt="Resto Image">
            </div>

            <!-- RIGHT TEXT -->
            <div class="about-right reveal-right">
                <h2 class="about-title">Hidangan menggugah selera serta rasa yang khas</h2>
                <p class="about-desc">
                    Warung makan ini merupakan usaha keluarga yang telah bertahan lintas
                    generasi.
                    Berawal dari gerobak keliling, rumah makan ini kini bertransformasi mengikuti zaman
                    Dari langkah kecil itulah usaha ini tumbuh hingga akhirnya
                    memiliki tempat tetap yang sederhana namun selalu ramai.
                </p>

                <p class="about-desc">
                    Menu andalan yang paling banyak dicari adalah sop racikan keluarga yang
                    gurih, segar, dan dibuat dari bahan-bahan pilihan. Resep tradisional
                    yang diwariskan turun-temurun inilah yang membuat setiap mangkuk sop
                    memiliki rasa khas yang tidak berubah sejak dulu.
                </p>
            </div>

        </div>
    </section>




    <!-- ================= MENU PREVIEW ================= -->
    <section id="varianmenu" class="menu-section">

        <!-- Subjudul & Judul -->
        <div class="menu-section-title">
            <h2 class="menu-main-title">Varian Menu<br>Kami</h2>
        </div>

        <!-- Grid Menu -->
        <div class="menu-grid">
            <div class="menu-card reveal">
                <div class="menu-img img1"></div>
            </div>
            <div class="menu-card reveal">
                <div class="menu-img img2"></div>
            </div>
            <div class="menu-card reveal">
                <div class="menu-img img3"></div>
            </div>
        </div>

        <!-- Tombol -->
        <a href="/menu">
            <button class="btn-more">Lihat Selengkapnya</button>
        </a>

    </section>




    <!-- ================= CATERING ================= -->
    <section id="catering" class="catering-section">

        <div class="catering-left reveal-left">
            <h4 class="subtitle">LAYANAN NASI BOX</h4>

            <h1 class="title">
                Berpengalaman<br>
                untuk<br>
                Berbagai<br>
                Acara
            </h1>

            <p class="desc">
                Berbekal pengalaman panjang, Resto Nusantara siap menjadi bagian dari acara penting Anda.
            </p>

            <a href="https://wa.me/+6281326265040" class="btn-catering" target="_blank">HUBUNGI KAMI</a>

        </div>

        <div class="catering-center reveal">
            <img src="{{ asset('images/jumber.jpeg') }}" alt="Catering" />
        </div>

        <div class="catering-right reveal-right">
            <h2 class="right-title">Untuk Acara</h2>

            <div class="event-item">
                <span class="icon">✔</span>
                <div>
                    <h3>Arisan</h3>

                </div>
            </div>

            <div class="event-item">
                <span class="icon">✔</span>
                <div>
                    <h3>Pengajian</h3>

                </div>
            </div>

            <div class="event-item">
                <span class="icon">✔</span>
                <div>
                    <h3>Perkantoran</h3>

                </div>
            </div>

            <div class="event-item">
                <span class="icon">✔</span>
                <div>
                    <h3>Jumat Berkah</h3>

                </div>
            </div>

        </div>
    </section>



    <!-- ================= GALERI ================= -->
    <section id="galeri" class="galeri-section">
        <div class="galeri-container">

            <div class="galeri-left">
                <h4 class="galeri-label">GALERI</h4>
                <h2 class="galeri-title">Momen Hangat,<br>Tersaji Nyata</h2>
            </div>

            <div class="galeri-right">
                <p>
                    Kumpulan foto setup layanan Nasi Box, live cooking, berbagai menu pilihan,
                    dan suasana dine-in agar meyakinkan calon pelanggan.
                </p>
            </div>

        </div>

        <div class="galeri-grid">
            <img class="reveal" src="/images/masak.jpg" alt="Foto Galeri 1">
            <img class="reveal" src="/images/suasana1.jpeg" alt="Foto Galeri 2">
            <img class="reveal" src="/images/musholla.jpg" alt="Foto Galeri 3">
            <img class="reveal" src="/images/takeaway.jpg" alt="Foto Galeri 4">
            <img class="reveal" src="/images/suasana 2.jpeg" alt="Foto Galeri 5">
            <img class="reveal" src="/images/jumber.jpeg" alt="Foto Galeri 6">
        </div>
    </section>



    <!-- ================= LOCATION ================= -->
   <section class="location-section">
    <!-- LEFT -->
    <div class="location-left">
        <img src="/images/lokasi.jpeg" alt="Lokasi RM Sopsip Junior" class="location-img">

        <h2>Lokasi RM. Sopsip Junior</h2>
        <p>
            CRH8+6RF, Jl. Sukoreno, Kemlayan, Kec. Serengan, Kota Surakarta,
            Jawa Tengah 57151
        </p>
    </div>

    <!-- RIGHT -->
    <div class="location-right">
        <div class="map-box">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.063474939!2d110.817181!3d-7.565425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a168c89343fed%3A0x52a8b2ddb3f7e9a4!2sJl.%20Sukoreno%2C%20Kemlayan%2C%20Kec.%20Serengan%2C%20Kota%20Surakarta%2C%20Jawa%20Tengah%2057151!5e0!3m2!1sid!2sid!4v1737638000000!5m2!1sid!2sid"
                loading="lazy"
                allowfullscreen>
            </iframe>
        </div>
    </div>
</section>




    <!-- ================= FOOTER ================= -->
    <footer class="footer">
        <div class="footer-left">
            <img src="{{ asset('images/logoo.png') }}" alt="Logo Resto" class="footer-logo">

            <h2 class="footer-title">Hidangan menggugah selera serta rasa yang khas</h2>
        </div>

        <div class="footer-right">
            <div class="footer-col">
                <a href="/">Beranda</a>
                <a href="#varianmenu">Varian Menu</a>
                <a href="#catering">Layanan Nasi BOX</a>
                <a href="#galeri">Galeri</a>

            </div>

            <div class="footer-col">
                <h3>Info Kontak</h3>
                <p>0813-2626-5040</p>
                
            </div>

            <div class="footer-col">
                <h3>Jam Operasional</h3>
                <p>Senin - Kamis: 10.00–15.00</p>
                <p>Jumat: Khusus Jumat Berkah</p>
                <p>Sabtu - Minggu: Libur</p>
            </div>
        </div>
    </footer>

    <div class="footer-bottom">
        Copyright © 2025 RM.Sopsip Junior. All Rights Reserved.
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const reveals = document.querySelectorAll(
                ".reveal, .reveal-left, .reveal-right"
            );

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("active");
                        } else {
                            entry.target.classList.remove("active");
                        }
                    });
                }, {
                    threshold: 0.15
                }
            );

            reveals.forEach(el => observer.observe(el));
        });
    </script>


</body>

</html>
