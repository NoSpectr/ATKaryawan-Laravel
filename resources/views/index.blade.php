<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ATKaryawan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
    <link rel="icon" href="{{ asset('assets/img/vas.png') }}" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" />
            </a>
        </div>
        <div class="menu-toggle">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        </ul>
    </nav>
    <!-- End Navbar -->

    <!-- Grid Body -->
    <div class="container">
        <div class="grid-container">
            <div class="grid-image">
                <img src="{{ asset('assets/img/atk.png') }}" alt="Gambar ATK" />
            </div>
            <div class="grid-text">
                <h2 class="store-title">ATKaryawan</h2>
                <p class="store-description">
                    Selamat datang di platform kami, tempat terbaik untuk mengelola
                    karyawan pada toko ATK dengan efisien dan mudah. Dapatkan pengalaman
                    pengelolaan karyawan yang optimal dengan fitur-fitur canggih dan
                    akses yang aman. Jelajahi kemudahan pengelolaan karyawan dengan
                    ATKaryawan, solusi terbaik untuk toko ATK Anda.
                </p>
            </div>
        </div>
    </div>
    <!-- End Grid Body -->
    <h2>Galeri ATK</h2>
    <!-- Slides -->
    <div class="slides">
        <div class="slide">
            <img src="{{ asset('assets/slide/s1.png') }}" alt="slide1" />
        </div>
        <div class="slide">
            <img src="{{ asset('assets/slide/s2.png') }}" alt="slide2" />
        </div>
        <div class="slide">
            <img src="{{ asset('assets/slide/s3.png') }}" alt="slide3" />
        </div>
        <div class="slide">
            <img src="{{ asset('assets/slide/s4.png') }}" alt="slide4" />
        </div>
        <div class="slide">
            <img src="{{ asset('assets/slide/s5.png') }}" alt="slide5" />
        </div>
        <div class="slide">
            <img src="{{ asset('assets/slide/s6.png') }}" alt="slide6" />
        </div>
        <div class="navigation">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(-1)">&#10095;</a>
        </div>
    </div>
    <!-- End Slides -->

    <!-- Footer -->
    <div class="footer" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2024 Copyright ATKaryawan.
    </div>
    <!-- End Footer -->
    <script>
        // Toogle bar
        document
            .querySelector(".menu-toggle")
            .addEventListener("click", function() {
                document.querySelector(".nav-links").classList.toggle("nav-active");
            });

        // slides
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides((slideIndex += n));
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slide");
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>
</body>

</html>
