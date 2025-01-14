<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>
        <?= $title; ?>
    </title>
</head>

<body class="bg-image" style="background-image: url('/public/image/background.webp');">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">KEKAR - Kerupuk Mekar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/data_admin">Data Produksi</a>
                    <a class="nav-link" href="#">Data Quality Control</a>
                    <a class="nav-link" href="/registrasi_admin">Registrasi</a>
                    <a class="nav-link" href="/login/logout">Logout</a>
                </div>
            </div>
            <span class="navbar-text">
                <?php
                if (session()->get('id_devisi') == 1) {
                    $d = 'Produksi';
                } elseif (session()->get('id_devisi') == 2) {
                    $d = 'Quality Control';
                } elseif (session()->get('id_devisi') == 3) {
                    $d = 'Admin';
                }

                echo session()->get('nama') . ' / ' . $d;
                ?>
            </span>
        </div>
    </nav>
    <?= $this->renderSection('content_admin'); ?>
        <!-- Copyright -->
        <footer class="fixed-bottom">
            <div class="text-center p-3 bg-light">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="/">Kelompok Kekar - UBSI</a>
            </div>
        </footer>
        <!-- Copyright -->
        <!-- Ini untuk memberi tahu konten yg berubah -->
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>