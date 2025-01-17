<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HashMicro ERP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite(['resources/css/home.css', 'resources/js/app.js'])
</head>

<body>
    <div
        style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-image: url('{{ asset('img/white_linen_texture.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; opacity: 0.35; z-index: -1">
    </div>
    <header class="position-relative">
        <!-- Background Image -->
        <div class="header-bg">
            <img src="{{ asset('img/landscape-1.jpg') }}" class="img-fluid w-100" alt="landscape-img"
                style="filter: brightness(70%)">

            <!-- Logo and Social Icons Container -->
            <div class="header-content text-center position-absolute">
                <img src="{{ asset('img/hashmicro-full-logo-white.png') }}" class="logo mb-2" alt="logo-img">

                <!-- Social Media Icons -->
                <div class="social-icons mb-4">
                    <a href="https://web.facebook.com/hashmicro/?locale=id_ID&_rdc=1&_rdr#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <div class="connector"></div>
                    <a href="https://www.instagram.com/hashmicro/?hl=en" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <div class="connector"></div>
                    <a href="https://id.pinterest.com/HashMicroSG/" class="social-icon">
                        <i class="fab fa-pinterest-p"></i>
                    </a>
                    <div class="connector"></div>
                    <a href="https://www.instagram.com/hashmicro/?hl=en" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <div class="connector"></div>
                    <a href="https://www.hashmicro.com/erp-system" class="social-icon">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FEATURES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">LAYOUTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">PAGES</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">LIGHT VERSION</a></li>
                    <li class="nav-item">
                        <div class="search-wrapper">
                            <input type="text" class="search-input" placeholder="Search and hit enter..."
                                style="font-style:italic">
                            <i class="fas fa-search search-icon" style="cursor: pointer;"></i>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Card Content --}}
    <div class="full-width-container mt-4">
        <!-- First Row -->
        <div class="blog-row">
            <div class="row g-2">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="{{ asset('img/travelling.jpg') }}" class="card-img" alt="Travel image">
                        <div class="card-content">
                            <div class="content-box">
                                <div class="category-wrapper">
                                    <div class="category-dots">• • •</div>
                                    <p class="card-category">Repice</p>
                                    <div class="category-dots">• • •</div>
                                </div>
                                <h3 class="card-title">AUTUMN CHESTNUT RICE</h3>
                                <p class="card-date">August 7, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="{{ asset('img/travelling.jpg') }}" class="card-img" alt="Travel image">
                        <div class="card-content">
                            <div class="content-box">
                                <div class="category-wrapper">
                                    <div class="category-dots">• • •</div>
                                    <p class="card-category">Foods/Travel</p>
                                    <div class="category-dots">• • •</div>
                                </div>
                                <h3 class="card-title">TRAVEL THE WORLD</h3>
                                <p class="card-date">August 20, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="{{ asset('img/travelling.jpg') }}" class="card-img" alt="Travel image">
                        <div class="card-content">
                            <div class="content-box">
                                <div class="category-wrapper">
                                    <div class="category-dots">• • •</div>
                                    <p class="card-category">Stories</p>
                                    <div class="category-dots">• • •</div>
                                </div>
                                <h3 class="card-title">DIARY OF MINE</h3>
                                <p class="card-date">August 25, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="blog-row">
            <div class="row g-2">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="{{ asset('img/travelling.jpg') }}" class="card-img" alt="Travel image">
                        <div class="card-content">
                            <div class="content-box">
                                <div class="category-wrapper">
                                    <span class="category-dots">•••</span>
                                    <p class="card-category">Recipe</p>
                                    <span class="category-dots">•••</span>
                                </div>
                                <h3 class="card-title">AUTUMN CHESTNUT RICE</h3>
                                <p class="card-date">August 7, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="{{ asset('img/travelling.jpg') }}" class="card-img" alt="Travel image">
                        <div class="card-content">
                            <div class="content-box">
                                <div class="category-wrapper">
                                    <div class="category-dots">• • •</div>
                                    <p class="card-category">Foods/Travel</p>
                                    <div class="category-dots">• • •</div>
                                </div>
                                <h3 class="card-title">TRAVEL THE WORLD</h3>
                                <p class="card-date">August 20, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="{{ asset('img/travelling.jpg') }}" class="card-img" alt="Travel image">
                        <div class="card-content">
                            <div class="content-box">
                                <div class="category-wrapper">
                                    <div class="category-dots">• • •</div>
                                    <p class="card-category">Stories</p>
                                    <div class="category-dots">• • •</div>
                                </div>
                                <h3 class="card-title">DIARY OF MINE</h3>
                                <p class="card-date">August 25, 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="social-icons">
            <a href="https://web.facebook.com/hashmicro/?locale=id_ID&_rdc=1&_rdr#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/hashmicro/?hl=en" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://mail.google.com" class="social-icon">
                <i class="fas fa-envelope"></i>
            </a>
        </div>
        <p class="footer-text">© 2025 HashMicro. All rights reserved.</p>
        <p class="footer-text">You're receiving this because you showed interest in ERP solutions.</p>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
