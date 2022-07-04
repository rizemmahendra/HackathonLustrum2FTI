<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/TSaham.ico">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <title>TSaham : Tentang Saham</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="style.css">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header-container">
        <div class="row flex-wrap">
            <nav class="navbar navbar-light">
                <div class="col-3 d-flex" id="logo-web">
                    <img src="img/TSaham.png" alt="TSaham" width="200">
                </div>
                <div class="col-9" id="nav-button">
                    <ul class="list-group list-group-horizontal px-0" id="nav-list">
                        <a href="#home">
                            <li id="home-button">HOME</li>
                        </a><a href="#TSaham">
                            <li id="saham-button">TENTANG SAHAM</li>
                        </a><a href="#calc-saham">
                            <li id="calc-button">KALKULATOR SAHAM</li>
                        </a><a href="#about">
                            <li id="about-button">TENTANG</li>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ------------------------------------------------------------------ -->
    <div id="home-page" class="container-fluid">
        <div class="row">
            <div id="big-title" class="col-7">
                <div class="row-desc">
                    <h1>BELAJAR SAHAM</h1>
                    <p>Paham Dasar Saham</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                </div>
                <div class="row">
                    <div class="row justify-content-start">
                        <div class="col-3">
                            <a href="#TSaham"><button type="button" id="get-button" class="home-button1">Tentang Saham</button></a>
                        </div>
                        <div class="col-4">
                            <a href="#calc-saham"><button type="button" id="calculate-button" class="home-button2">Kalkulator Saham</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="big-img" class="col-5 d-flex align-items-center justify-content-center">
                <img src="img/TSaham_big.png" alt="" width="350px">
            </div>
        </div>
    </div>

    <!-- saham page -->
    <?php include "saham.php"; ?>

    <!-- calc page -->
    <?php include "calc-saham.php"; ?>

    <div id="about" class="container-fluid hidden">
        <h1>About</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem delectus ipsam aut esse, rerum laudantium iusto laboriosam alias architecto! Tempore, amet deserunt. Itaque, veniam temporibus quis non maiores consectetur. Quisquam!
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quod voluptates, maiores ratione eius commodi voluptatibus explicabo soluta sit neque nostrum, culpa fugiat quibusdam ex quo quia! Nihil, nemo tenetur.</p>
    </div>
</body>
</html>
<script src="scripts.js"></script>
<script src="api.js"></script>
<script src="kalkulator.js"></script>