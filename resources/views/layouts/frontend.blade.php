<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>FAST TRACK</title>
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #13005A;">
        <div class="container">
            <a class="navbar-brand" href="#">FAST TRACK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#syarat">Syarat & Ketentuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="/login" class="btn btn-light float-end">Login
                        <i class="bi bi-box-arrow-in-left"></i>
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    @yield('content')

    <!-- Footer -->
    <footer class=" text-white pt-5 pb-4" style="background-color: #00337C;">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h3>FAST TRACK</h3>
                    <p>Syarat dan Ketentuan | Kebijakan Privasi | Peta Situs</p>
                    <a>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-twitter"></i>
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
                <div class="footer-bottom">
                    <p>copyright &copy;2023 FasTrack. designed by
                        <span>Reva Saf</span></p>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>

    <!-- Option 2: Separate Po pper and Bootstrap JS -->
    <!-- <scrip
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></scrip> <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script> -->
</body>

</html>
