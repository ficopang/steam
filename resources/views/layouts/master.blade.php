<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .bg-blue {
        background-color: #1b2838;
    }

    .bg-blue2 {
        background-color: #1c6e93;
    }

    li {
        color: #43748f;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <header class="bg-dark">
        <div class="container clearfix">
            <div class="float-end d-flex align-items-center">
                <button class="btn btn-success mx-2">Install Steam</button>
                <a class="text-light text-decoration-none float-end mx-2" href="#">login</a>
                <a class="text-light text-decoration-none float-end mx-2" href="#">language</a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img width="100px" src="assets/logo-steam.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                STORE
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-light" href="#">HOME</a></li>
                                <li><a class="dropdown-item text-light" href="#">DISCOVERY QUEUE</a></li>
                                <li><a class="dropdown-item text-light" href="#">WISHLIST</a></li>
                                <li><a class="dropdown-item text-light" href="/point-shop">POINT SHOP</a></li>
                                <li><a class="dropdown-item text-light" href="#">NEWS</a></li>
                                <li><a class="dropdown-item text-light" href="#">STATS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">COMMUNITY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SUPPORT</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="bg-blue m-0 p-0">
        {{-- Content --}}
        @yield('content')


        <!-- FOOTER -->
        <footer class="bg-dark m-0 p-0 d-flex justify-content-center">
            <div class="container m-0">
                <hr class="border-bottom">
                <div class="row">
                    <div class="col-2"><img width="100%" src="assets/logo-valve.png" alt=""></div>
                    <div class="col-8">
                        <p class="text-light">2021 Valve Corporation All rights reserved All trademarks are property of
                            their respective owners in the US and other countries
                            VAT included in all prices where applicable</p>
                    </div>
                    <div class="col-2"><img width="100%" src="assets/logo-steam.png" alt=""></div>
                </div>
                <hr class="border-top">
                <a class="text-light text-decoration-none mx-2" href="#">About valve</a>
                <a class="text-light text-decoration-none mx-2" href="#">Jobs</a>
                <a class="text-light text-decoration-none mx-2" href="#">Steamworks</a>
                <a class="text-light text-decoration-none mx-2" href="#">Steam Distribution</a>
                <a class="text-light text-decoration-none mx-2" href="#">Support</a>
                <a class="text-light text-decoration-none mx-2" href="#">Gift Cards</a>
            </div>
        </footer>
    </div>

</body>

</html>
