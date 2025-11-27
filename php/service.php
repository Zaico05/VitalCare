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
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" >
        <!-- Estilos principales -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <!-- Manifest PWA -->
        <link rel="manifest" href="manifest.json">
<meta name="theme-color" content="#0d6efd">


        <style>
            #cart-toast {
                position: fixed;
                top: 20px;
                right: 20px;
                background: #28a745;
                color: #fff;
                padding: 15px 20px;
                border-radius: 8px;
                display: none;
                z-index: 9999;
                font-weight: bold;
                animation: fadeInOut 2s ease;
            }

            @keyframes fadeInOut {
                0% {opacity: 0;}
                10% {opacity: 1;}
                90% {opacity: 1;}
                100% {opacity: 0;}
            }
        </style>
        </head>

    <body>
        <div id="cart-toast">Producto agregado al carrito</div>

        <!-- Spinner -->
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
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>fvitalcare@gmail.com</a>
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
                        
                        <a href="index.php" class="nav-item nav-link">Inicio</a>                        
                        <a href="service.php" class="nav-item nav-link active">Carrito</a>
                        <a href="about.php" class="nav-item nav-link">Historial</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Emergencias</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.php" class="dropdown-item">Hospitales</a>
                                <a href="feature.php" class="dropdown-item">Farmacias</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        <!-- Navbar End -->


        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Carrito</h4>
                    </div>
                    <h1 class="display-3 mb-4">Medicamentos de farmacia</h1>
                    <p class="mb-0">En este apartado se podra ver toda la variedad de medicamentos que Vitalcare tiene para usted y su familia.</p>
                </div>
                <!--Carrito Start-->
        <div class="container my-5">
        <h3 class="text-center mb-4">Carrito de Compras</h3>
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="cart-table">
            <thead class="table-primary">
                <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <tr><td colspan="5">Tu carrito está vacío</td></tr>
            </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <h4 class="me-3">Total: <span id="cart-total">$0.00 MXN</span></h4>
            <button id="checkout" class="btn btn-success">Validar Compra</button>
        </div>
        </div>
        <!--Carrito End-->
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Paracetamol-500mg.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Paracetamol 500 mg</h5>
                                <p class="mb-2">Analgésico y antipirético utilizado para aliviar dolores leves y reducir la fiebre.</p>
                                <p class="fw-bold text-primary mb-3">$35.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Ibuprofeno.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Ibuprofeno 400 mg</h5>
                                <p class="mb-2">Antiinflamatorio no esteroideo indicado para aliviar dolor muscular, de cabeza y fiebre.</p>
                                <p class="fw-bold text-primary mb-3">$42.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Naproxeno.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Naproxeno 500 mg</h5>
                                <p class="mb-2">Eficaz contra inflamaciones, dolores menstruales, articulares y musculares.</p>
                                <p class="fw-bold text-primary mb-3">$55.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/OMEPRAZOL.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Omeprazol 20 mg</h5>
                                <p class="mb-2">Protector gástrico que reduce la producción de ácido estomacal, ideal para gastritis y reflujo.</p>
                                <p class="fw-bold text-primary mb-3">$48.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Amoxicilina.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Amoxicilina 500 mg</h5>
                                <p class="mb-2">Antibiótico de amplio espectro utilizado para tratar infecciones respiratorias y urinarias.</p>
                                <p class="fw-bold text-primary mb-3">$60.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Diclofenaco.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Diclofenaco 50 mg</h5>
                                <p class="mb-2">Analgésico y antiinflamatorio efectivo en dolores musculares, articulares y menstruales.</p>
                                <p class="fw-bold text-primary mb-3">$38.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Losartan.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Losartán 50 mg</h5>
                                <p class="mb-2">Medicamento antihipertensivo que ayuda a controlar la presión arterial alta.</p>
                                <p class="fw-bold text-primary mb-3">$52.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Metformina.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Metformina 850 mg</h5>
                                <p class="mb-2">Controla los niveles de glucosa en sangre en personas con diabetes tipo 2.</p>
                                <p class="fw-bold text-primary mb-3">$45.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Loratadina.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Loratadina 10 mg</h5>
                                <p class="mb-2">Antihistamínico que alivia los síntomas de alergias, como estornudos y picazón.</p>
                                <p class="fw-bold text-primary mb-3">$40.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/salbutamol.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Salbutamol Inhalador</h5>
                                <p class="mb-2">Broncodilatador utilizado para aliviar ataques de asma y dificultad respiratoria.</p>
                                <p class="fw-bold text-primary mb-3">$120.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/azitromicina.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Azitromicina 500 mg</h5>
                                <p class="mb-2">Antibiótico utilizado para tratar infecciones respiratorias y de garganta.</p>
                                <p class="fw-bold text-primary mb-3">$75.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/prednisona.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Prednisona 5 mg</h5>
                                <p class="mb-2">Corticosteroide que reduce inflamaciones y reacciones alérgicas severas.</p>
                                <p class="fw-bold text-primary mb-3">$58.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Furosemida.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Furosemida 40 mg</h5>
                                <p class="mb-2">Diurético indicado para eliminar líquidos retenidos y tratar hipertensión.</p>
                                <p class="fw-bold text-primary mb-3">$38.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/ketorolaco.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Ketorolaco 10 mg</h5>
                                <p class="mb-2">Potente analgésico para aliviar dolor intenso de corto plazo.</p>
                                <p class="fw-bold text-primary mb-3">$46.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Enalapril.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Enalapril 10 mg</h5>
                                <p class="mb-2">Medicamento para controlar la presión arterial alta y prevenir insuficiencia cardíaca.</p>
                                <p class="fw-bold text-primary mb-3">$49.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Ranitidina.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Ranitidina 150 mg</h5>
                                <p class="mb-2">Reduce la acidez estomacal y alivia el malestar por gastritis o úlceras.</p>
                                <p class="fw-bold text-primary mb-3">$44.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Clonazepam.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Clonazepam 2 mg</h5>
                                <p class="mb-2">Ansiolítico que ayuda a controlar crisis de ansiedad y trastornos del sueño.</p>
                                <p class="fw-bold text-primary mb-3">$65.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/cetrizina.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Cetirizina 10 mg</h5>
                                <p class="mb-2">Antialérgico que alivia estornudos, picazón y congestión nasal.</p>
                                <p class="fw-bold text-primary mb-3">$36.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/aciclovir.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Aciclovir 400 mg</h5>
                                <p class="mb-2">Antiviral indicado para tratar infecciones por herpes simple y varicela.</p>
                                <p class="fw-bold text-primary mb-3">$70.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Suero.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Suero Oral 1 L</h5>
                                <p class="mb-2">Rehidrata el cuerpo y repone electrolitos perdidos por diarrea o calor.</p>
                                <p class="fw-bold text-primary mb-3">$25.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Ambroxol.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Ambroxol Jarabe</h5>
                                <p class="mb-2">Mucolítico que facilita la expulsión de flemas en tos productiva.</p>
                                <p class="fw-bold text-primary mb-3">$55.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Claritromicina.jpg" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Claritromicina 500 mg</h5>
                                <p class="mb-2">Antibiótico indicado en infecciones respiratorias y de oído.</p>
                                <p class="fw-bold text-primary mb-3">$72.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Diazepam.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Diazepam 10 mg</h5>
                                <p class="mb-2">Ansiolítico y relajante muscular para tratar ansiedad o insomnio.</p>
                                <p class="fw-bold text-primary mb-3">$68.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded">
                        <div class="service-img rounded-top">
                            <img src="../img/Domperidona.png" class="img-fluid rounded-top w-100" alt="">
                        </div>
                        <div class="service-content rounded-bottom bg-light p-4">
                            <div class="service-content-inner">
                                <h5 class="mb-2">Domperidona 10 mg</h5>
                                <p class="mb-2">Alivia náuseas, vómitos y molestias estomacales leves.</p>
                                <p class="fw-bold text-primary mb-3">$43.00 MXN</p>
                                <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Services End -->        

    <script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let history = JSON.parse(localStorage.getItem('history')) || [];

    function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
    }

    function saveHistory() {
    localStorage.setItem('history', JSON.stringify(history));
    }

    function updateCart() {
    const cartItems = document.getElementById('cart-items');
    const totalEl = document.getElementById('cart-total');

    if (cart.length === 0) {
        cartItems.innerHTML = '<tr><td colspan="5">Tu carrito está vacío</td></tr>';
        totalEl.textContent = '$0.00 MXN';
        return;
    }

    let total = 0;
    cartItems.innerHTML = '';

    cart.forEach((item, index) => {
        const subtotal = item.price * item.quantity;
        total += subtotal;

        const row = document.createElement('tr');
        row.innerHTML = `
        <td>${item.name}</td>
        <td>$${item.price.toFixed(2)}</td>
        <td>
            <input type="number" min="1" value="${item.quantity}" class="form-control form-control-sm text-center quantity-input" data-index="${index}">
        </td>
        <td>$${subtotal.toFixed(2)}</td>
        <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(${index})">Eliminar</button></td>
        `;
        cartItems.appendChild(row);
    });

    totalEl.textContent = `$${total.toFixed(2)} MXN`;
    saveCart();
    }

    function addToCart(name, price) {
    const existing = cart.find(item => item.name === name);
    if (existing) {
        existing.quantity++;
    } else {
        cart.push({ name, price, quantity: 1 });
    }
    updateCart();
    }

    function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart();
    }

    document.addEventListener('input', (e) => {
    if (e.target.classList.contains('quantity-input')) {
        const index = e.target.dataset.index;
        const newQty = parseInt(e.target.value);
        if (newQty > 0) {
        cart[index].quantity = newQty;
        }
        updateCart();
    }
    });

    document.getElementById('checkout').addEventListener('click', () => {
    if (cart.length === 0) {
        alert('Tu carrito está vacío');
        return;
    }

    const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    const fecha = new Date().toLocaleString();

    history.push({
        id: Date.now(),
        date: fecha,
        items: [...cart],
        total: total.toFixed(2)
    });

    saveHistory();
    alert(`Compra validada el ${fecha}\nTotal a pagar: $${total.toFixed(2)} MXN`);

    cart = [];
    saveCart();
    updateCart();
    });

    document.querySelectorAll('.service-item').forEach(item => {
    const btn = item.querySelector('.btn');
    const name = item.querySelector('h5').textContent;
    const priceText = item.querySelector('.fw-bold').textContent.replace('$', '').replace('MXN', '').trim();
    const price = parseFloat(priceText);

    btn.addEventListener('click', (e) => {
        e.preventDefault();
        addToCart(name, price);
    });
    });

    updateCart();
    </script>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
    function showToast(message) {
        const toast = document.getElementById("cart-toast");
        toast.textContent = message;
        toast.style.display = "block";

        setTimeout(() => {
            toast.style.display = "none";
        }, 2000);
    }
    document.querySelectorAll(".service-item a.btn-primary").forEach(btn => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();

            const productName = this.parentElement.querySelector("h5").textContent;

            showToast(productName + " agregado al carrito");
        });
    });
    </script>

    </body>
</html>