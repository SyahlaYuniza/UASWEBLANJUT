<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="/backend/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .costom-gallery img {
            margin-right: 40px;
            margin-left: 40px;
        }
    </style>

</head>



<body>
    <main class="flex-shrink-0">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <div class="container px-5">
                <a class="navbar-brand" href="index.html">
                    <!-- Sesuaikan path dan style sesuai kebutuhan Anda -->
                </a>
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('halaman.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="">News</a></li>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('login') }}">Login</a>
                                </li>
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>
   

        <style>
            .bg-dark.py-5 {
                background-image: url('/pict/honkaibg.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                color: rgb(250, 250, 250);
                /* Warna teks untuk kontras dengan background */
            }
        </style>
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6 d-flex flex-column align-items-center">
                        <div class="my-5 text-center text-xl-start">

                            <h1>BUTTLER STADIUM BASKETBALL</h1>
                            <p>Selamat datang di Buttler Stadium Basketball kami! Tunjukan Selebrasi Slamdunk kalian . Segera pesan lapangan dan Selamat bermain!</p>
                            <br>
                            <br>
                            {{-- <div class="text-center">
                                <a class="btn btn-success btn-lg px-4 me-sm-3" href="#features">Shop Now</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <br>
        <br>
        <br>
        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <h2 class="text-center">Basketball Court</h2>
                <br>
            <div class="row row-cols-1 row-cols-md-3 g-4 text-center custom-gallery">
                @forelse ($data as $row)
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="text-center mt-5 mb-2">
                            <img src="/images/{{ $row->image }}" alt="{{ $row->image }}" width="350" height="200">
                        </div>

                        <div class="card-body">
                            <p><strong>Lapangan Basket: </strong> {{ $row->Nama_lapangan_basket }}</p>
                            <p><strong>Lokasi: </strong>{{ $row->Lokasi }}</p>
                            <p><strong>Harga: </strong>{{ $row->Harga }}
                            </p>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-danger">
                        Data news belum tersedia
                    </div>
                @endforelse
            </div>
            </div>
        </section>
        <br>
        <br>
        <br>

        <footer class="text-center text-lg-start bg-dark py-3 text-white">

            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <img src="" alt="syahlayuniza" class="img-fluid" width="50%">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-10">
                                Buttler Stadium ID
                            </h6>
                            <p>
                                UAS WEB LANJUT
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Sosial Media
                            </h6>
                            <p>
                                <i class="fa-brands fa-instagram"></i>
                                <a href="https://www.instagram.com/jimmybutler/" class="text-reset">Instagram

                                </a>
                            </p>
                            <p>
                                <i class="fa-brands fa-facebook"></i>
                                <a href="" class="text-reset">Facebook</a>
                            </p>
                            <p>
                                <i class="fa-brands fa-twitter"></i>
                                <a href="" class="text-reset">Twitter</a>
                            </p>
                            <p>
                                <i class="fa-brands fa-youtube"></i>
                                <a href="https://www.youtube.com/@NBA" class="text-reset">YouTube</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Hubungi Saya
                            </h6>
                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                Alamat: West 4th Street, New York, NY
                            </p>
                            <p>
                                <i class="bi bi-envelope"></i>
                                jimmyybutller@gmail.com
                            </p>
                            <p><i class="bi bi-phone"></i> 212 120802</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                Copyright &copy; 2024 Your Butller Stadium Basketball ID | Design by Syahla Yuniza
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="backend/js/scripts.js"></script>
</body>

</html>