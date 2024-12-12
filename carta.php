<?php 
include("./config/conexion.php");
$platos ="SELECT * FROM platos";
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Carta</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/web/Perfil.png" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="//code.tidio.co/kardsbgjjdtyclfhku1dqhaioowmmdex.js" async></script>

</head>
<header class="header navbar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <!-- Start Navbar -->
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/web/CevicheriaDonGato.png" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="false" aria-label="Toggle navigation">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="nosotros.php" class="false"
                                        aria-label="Toggle navigation">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a href="carta.php" class="active" aria-label="Toggle navigation">Carta</a>
                                </li>
                                <li class="nav-item">
                                    <a href="reservas.php" class="false"
                                        aria-label="Toggle navigation">Reservas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="promociones.php" class="false"
                                        aria-label="Toggle navigation">Promociones</a>
                                </li>
                                <li class="nav-item">
                                    <a href="equipo.php" class="false"
                                        aria-label="Toggle navigation">Equipo</a>
                                </li>
                            </ul>
                        </div>
                        <div class="button add-list-button">
                            <a href="login.php" class="btn">Iniciar Sesion</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Nuestro Menú</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="/AVANCE4/promociones.php">Promociones</a></li>
                        <li>20%</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- End About Area -->

    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">!En su Punto!</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Platos Marinos</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Platos hechos con los alimentos de la mejor
                            calidad</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Ceviche</h4>
                            <img src="assets/images/web/Ceviche.png" alt="">
                            <div class="price">
                                <h2 class="amount">S/.12<span class="duration">/PE</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Comprar Platillo</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">¿Qué incluye?</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Plato medio de Ceviche.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Porción de cancha.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Ají Limo.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Vaso de Chicha.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" data-wow-delay=".4s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Arroz con Marisco</h4>
                            <img src="assets/images/web/Arroz con Marisco.png">
                            <div class="price">
                                <h2 class="amount">S/.24<span class="duration">/PE</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Comprar Platillo</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">¿Qué incluye?</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Plato de Arroz con Marisco.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Porción de cancha.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Ají Limo.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Vaso de Chicha.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" data-wow-delay=".6s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Chupe de Camarón</h4>
                            <img src="assets/images/web/Chupe de camarones.png">
                            <div class="price">
                                <h2 class="amount">S/.32<span class="duration">/PE</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Comprar Platillo</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">¿Qué incluye?</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Plato de Chupe de Camarón.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Porción de cancha.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Vaso de Chicha.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" data-wow-delay=".8s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Trio Marino</h4>
                            <img src="assets/images/web/Trío Marino.png">
                            <div class="price">
                                <h2 class="amount">S/.48<span class="duration">/PE</span></h2>
                            </div>
                            <div class="button">
                                <a href="javascript:void(0)" class="btn">Comprar Platillo</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">¿Qué incluye?</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Plato de Trío Marino.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Porción de cancha.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Ají Limo.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Vaso de Chicha.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
            </div>
        </div>
    </section>



    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/images/web/Logo.png" alt="#">
                                </a>
                            </div>
                            <p>Disfruta las delicias del mar en nuestro restaurant D' Don Gato.</p>
                            <ul class="social">
                            <li><a href="https://www.facebook.com/Cevicher%C3%ADa-DDon-Gato-108359488571593/" target="_blank"><i class="lni lni-facebook-filled"></i></a></li>
                                <!-- <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li> -->
                                <li><a href="https://www.instagram.com/cevicheriaddongato/" target="_blank"><i class="lni lni-instagram"></i></a></li>
                                <!-- <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li> -->
                                <li><a href="https://www.youtube.com/channel/UCHaqs8Tgr00BtLmV3ElK7MA" target="_blank"><i class="lni lni-youtube"></i></a></li>
                                <!-- <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li> -->
                            </ul>
                            <p class="copyright-text">Diseñado y desarrollado by <a href="https://graygrids.com/"
                                    rel="nofollow" target="_blank">Marck</a>
                            </p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>|Dirección</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Ignacio Merino 2427</a></li>
                                        <li><a href="javascript:void(0)">Av. Ignacio Merino 2427, Lince 15046</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>|Horarios</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Lunes a Domingo</a></li>
                                        <li><a href="javascript:void(0)">11am a 16pm</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>|Contactos</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">+51 987654321</a></li>
                                        <li><a href="javascript:void(0)">(01) 421-4391</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <!-- <div class="col-lg-3 col-md-6 col-12"> -->
                            <!-- Single Widget -->
                            <!-- <div class="single-footer f-link">
                                                <h3>Legal</h3>
                                                <ul>
                                                    <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                                    <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                                    <li><a href="javascript:void(0)">Catering Services</a></li>
                                                    <li><a href="javascript:void(0)">Customer Relations</a></li>
                                                    <li><a href="javascript:void(0)">Innovation</a></li>
                                                </ul>
                                            </div> -->
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });

    //====== counter up 
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
    });
    cu.start();
    </script>
</body>

</html>