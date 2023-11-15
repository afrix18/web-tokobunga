<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ini Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>

<body style="background: lightcyan">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: lightslategray">
        <a class="navbar-brand ms-3" href="{{ route('homes') }}">TOKOBUNGA</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('homes') }}">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('prod') }}">Produk</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('log') }}">Admin</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="container text-center">
            <h1>TokoBunga, Tempatnya Bunga Berkualitas!</h1>
        </div>
        <div class="text-center mt-5">
            <h2 class="display-10">Tentang</h2>
            <p class="text-center" style="width: 500px; margin: auto;">
            Dengan koleksi bunga yang beragam, kami menyediakan pilihan terbaik untuk berbagai acara, mulai dari pernikahan hingga ulang tahun. Setiap bunga dipilih dengan cermat untuk memastikan kesegaran dan keindahan yang tak tertandingi. Tim ahli kami berkomitmen untuk menciptakan pengalaman belanja yang memuaskan, dengan layanan pelanggan yang ramah dan profesional.   
            </p>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="container text-center";>
            <h2 class="display-10 font-weight-bold">Visi Misi & Tujuan</h2>
            </p>
            <div class="row pt-4">
                <div class="col-md-4">
                    <h3 class="mt-3">Visi</h3>
                    <p style="max-width: 350px;">
                        Menjadi pilihan utama dalam memberikan keindahan dan kesegaran bunga, menginspirasi kebahagiaan dalam setiap momen.
                    </p>
                </div>

                <div class="col-md-4">
                    <h3 class="mt-3">Misi</h3>
                    <p style="max-width: 350px;">
                        Menyajikan rangkaian bunga berkualitas tinggi dengan pelayanan terbaik, menciptakan pengalaman belanja yang memuaskan bagi pelanggan.
                    </p>
                </div>

                <div class="col-md-4">
                    <h3 class="mt-3">Tujuan</h3>
                    <p style="max-width: 350px;">
                        Menghadirkan kebahagiaan melalui keindahan bunga, dan menjadi toko bunga terpercaya yang memenuhi kebutuhan setiap pelanggan dengan profesionalisme dan dedikasi.
                    </p>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                </script>
</body>

</html>
