<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>VitalCare - Physical Therapy Website Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <!-- Fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 
        <!-- Iconos y librerías externas -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Librerías locales -->
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <!-- Estilos principales -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <!-- Manifest PWA -->
<link rel="manifest" href="manifest.json">
<meta name="theme-color" content="#0d6efd">

    </head>

    <body>

        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>


        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Ubicación</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>VitalCare@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://www.facebook.com/profile.php?id=61583097403187" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/fvitalcare/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>VitalCare</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">

                        <a href="index.php" class="nav-item nav-link ">Inicio</a>                        
                        <a href="service.php" class="nav-item nav-link">Carrito</a>
                        <a href="about.php" class="nav-item nav-link">Historial</a>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Emergencias</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.php" class="dropdown-item">Hospitales</a>
                                <a href="feature.php" class="dropdown-item">Farmacias</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        <!-- Book Appointment Start -->
        <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Farmacias</h4>
            </div>
            <h1 class="display-3 mb-4">Farmacias en Aguascalientes</h1>
            <p class="mb-0">Encuentra las principales farmacias en Aguascalientes, abiertas las 24 horas o con servicio a domicilio, para surtir tus medicamentos de manera rápida y segura.</p>
            </div>

            <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-guadalajara.jpg" class="img-fluid w-100" alt="Farmacia Guadalajara">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">Farmacias Guadalajara</a>
                    <p class="my-3">Cadena nacional con sucursales abiertas las 24 horas. Ofrecen medicamentos, productos de salud y fototienda.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Av. Aguascalientes Sur 502</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 978 0234</p>
                    
                </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-benavides.jpg" class="img-fluid w-100" alt="Farmacias Benavides">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">Farmacias Benavides</a>
                    <p class="my-3">Una de las cadenas más grandes del país con venta de medicamentos genéricos y de patente. Servicio a domicilio disponible.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Blvd. Luis Donaldo Colosio 715</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 970 3350</p>
                    
                </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-similares.jpg" class="img-fluid w-100" alt="Farmacias Similares">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">Farmacias Similares</a>
                    <p class="my-3">Medicamentos genéricos a precios accesibles. Consultorios médicos adjuntos disponibles en la mayoría de las sucursales.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Av. López Mateos 900</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 914 4120</p>
                    
                </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-del-ahorro.jpg" class="img-fluid w-100" alt="Farmacias del Ahorro">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">Farmacias del Ahorro</a>
                    <p class="my-3">Ofrecen medicamentos de patente, genéricos y productos de salud. Cuentan con servicio nocturno y programa de lealtad.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Av. Universidad 602</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 978 2050</p>
                    
                </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-drogeria.jpg" class="img-fluid w-100" alt="Droguería Farmacia Aguascalientes">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">Droguería Farmacia Aguascalientes</a>
                    <p class="my-3">Farmacia local con amplia experiencia en atención personalizada y precios competitivos.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Calle Allende 109, Zona Centro</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 108 5149</p>
                    
                </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-del-angel.jpg" class="img-fluid w-100" alt="Farmacia del Ángel">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">Farmacia del Ángel</a>
                    <p class="my-3">Cadena regional con buena disponibilidad de medicamentos especializados y productos de cuidado personal.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Av. Aguascalientes Norte 400</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 915 2225</p>
                    
                </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.7s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-hersa.jpg" class="img-fluid w-100" alt="Farmacia HERSA">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">Farmacia HERSA</a>
                    <p class="my-3">Farmacia local con enfoque en medicamentos genéricos y productos naturales. Ofrecen servicio rápido y amable.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Blvd. José María Chávez 1803</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 917 8320</p>
                    
                </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.8s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-medicity.jpg" class="img-fluid w-100" alt="Farmacia Medicity">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">Farmacia Medicity</a>
                    <p class="my-3">Farmacia moderna con plataforma digital para compras en línea y entregas a domicilio en minutos.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Av. Independencia 2350</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 123 4545</p>
                    
                </div>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.9s">
                <div class="blog-item rounded">
                <div class="blog-img">
                    <img src="../img/farmacia-lapaz.jpg" class="img-fluid w-100" alt="Farmacia Universitaria">
                </div>
                <div class="blog-centent p-4">
                    <a href="#" class="h4">FARMACIA LA PAZ</a>
                    <p class="my-3">Farmacia vinculada con la Universidad Autónoma de Aguascalientes, con precios accesibles para estudiantes y comunidad general.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary"></i> Av. José María Chávez 1217, Las Américas, 20230 Aguascalientes, Ags.</p>
                    <p class="mb-3"><i class="fa fa-phone text-primary"></i> 449 392 3880</p>
                    
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Book Appointment End -->

        <!-- Footer Start -->
       <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4"><i class="fas fa-star-of-life me-3"></i>VitalCare</h4>
                            <p></p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/profile.php?id=61583097403187"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.instagram.com/fvitalcare/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 col-xl-3">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../js/main.js"></script>
        
    </body>
</html>